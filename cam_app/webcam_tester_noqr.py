import cv2
import sys
import os
import tensorflow as tf
import urllib.request
import urllib.parse
from pyzbar import pyzbar
import datetime
import imutils
import time

cascPath = "haarcascade_frontalface_alt.xml"
faceCascade = cv2.CascadeClassifier(cascPath)
global video_capture
video_capture = cv2.VideoCapture(0)
global found
found = set()
time.sleep(2.0)

def send_post_http():
    global phone_number
    #http://43210.ru/thankyou.php?t=9************&b=3
    print('Sending to:' + str(phone_number))
    url = 'http://43210.ru/thankyou.php?t=' + str(phone_number) + '&b=3'
    f = urllib.request.urlopen(url)

def neural_process():
    global phone_number
    global video_capture
    video_capture.release()
    if phone_number:
        image_path = 'testimg.jpg'
        global obj_class
        if image_path:
            # Read the image_data
            image_data = tf.gfile.FastGFile(image_path, 'rb').read()
            # Loads label file, strips off carriage return
            label_lines = [line.rstrip() for line 
                               in tf.gfile.GFile("output_labels.txt")]
            # Unpersists graph from file
            with tf.gfile.FastGFile("output_graph.pb", 'rb') as f:
                graph_def = tf.GraphDef()
                graph_def.ParseFromString(f.read())
                _ = tf.import_graph_def(graph_def, name='')
            with tf.Session() as sess:
                # Feed the image_data as input to the graph and get first prediction
                softmax_tensor = sess.graph.get_tensor_by_name('final_result:0')
                
                predictions = sess.run(softmax_tensor, \
                         {'DecodeJpeg/contents:0': image_data})
                
                # Sort to show labels of first prediction in order of confidence
                top_k = predictions[0].argsort()[-len(predictions[0]):][::-1]
                
                obj_class = label_lines[top_k[0]]
                
                for node_id in top_k:
                    human_string = label_lines[node_id]
                    score = predictions[0][node_id]
                    if (score>0.6):
                        print('thanks!')
                        send_post_http()
                    print('%s (score = %.5f)' % (human_string, score))
    video_capture = cv2.VideoCapture(0)

global obj_class
global phone_number

obj_class = ''
first = 1
phone_number = 1;

while True:
    # Capture frame-by-frame
    
    ret, frame = video_capture.read()

    gray = cv2.cvtColor(frame, cv2.COLOR_BGR2GRAY)

    faces = faceCascade.detectMultiScale(
        gray,
        scaleFactor=1.1,
        minNeighbors=5,
        minSize=(30, 30),
        
    )
    
    cv2.putText(frame, obj_class , (100, 100), cv2.FONT_HERSHEY_SIMPLEX, 1.0, (0 , 0, 255),lineType=cv2.LINE_AA)  
    # Draw a rectangle around the faces
    for (x, y, w, h) in faces:
        cv2.rectangle(frame, (x, y), (x+w, y+h), (0, 255, 0), 2)
        if first==1:
            first=0
            obj_class='Hello, please show qr-code'
    
    
    # Display the resulting frame
    cv2.imshow('Video', frame)

    if cv2.waitKey(1) & 0xFF == ord('c'):
        cv2.imwrite(filename='testimg.jpg', img=frame)
        neural_process()

    if cv2.waitKey(1) & 0xFF == ord('q'):
        break

# When everything is done, release the capture
video_capture.release()
cv2.destroyAllWindows()