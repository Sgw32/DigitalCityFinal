import os


class RenameFiles:
    def __init__(self, folder=None, new_name=None, start_nr=0):
        self.startFolder = folder
        self.newName = new_name
        self.startNr = start_nr

    def loop_files(self, start_folder=None, new_name=None, start_nr=0):
        global file_f
        if start_folder is None and self.startFolder is not None:
            start_folder = self.startFolder

        if new_name is None and self.newName is not None:
            new_name = self.newName

        if self.startNr >= start_nr:
            start_nr = self.startNr

        for filename in os.listdir(start_folder):
            file = os.path.join(startfolder, filename)
            
            filename, file_extension = os.path.splitext(file)
            
            number = '{0:04}'.format(start_nr)
            new_filename = "{}-{}{}".format(new_name, number, file_extension.lower())
            newfile = os.path.join(startfolder, new_filename)
            file_f.write(file+'\n') 
            start_nr += 1


if __name__ == '__main__':
    global file_f
    global class_of_object
    #glass
    dir_path = os.path.dirname(os.path.realpath(__file__))
    startfolder = os.path.join(dir_path, "images/")
    newName = "glass"
    class_of_object = 0
    file_f = open(newName + "annotate.txt","w") 
    startIncNumber = 1
    
    r = RenameFiles()
    r.loop_files(startfolder, newName, startIncNumber)
    file_f.close() 