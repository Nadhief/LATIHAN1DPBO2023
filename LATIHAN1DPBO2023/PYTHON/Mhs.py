# class declaration
class Mhs:
    # __ private
    # _ public
    __name = ""
    __nim =""
    __ps = ""
    __fakultas = ""
    
    def __init__(self, name = "", nim = "", ps = "", fakultas = ""):
        self.__name = name
        self.__nim = nim
        self.__ps = ps
        self.__fakultas = fakultas
    # getter dan setter #
    
    # get name
    def get_name(self):
        return self.__name
    # set name
    def set_name(self, name):
        self.__name = name
    # get nim
    def get_nim(self):
        return self.__nim
    # set nim
    def set_nim(self, nim):
        self.__nim = nim
    # get ps
    def get_ps(self):
        return self.__ps
    # set ps
    def set_ps(self, ps):
        self.__ps = ps
    # get fakultas
    def get_fakultas(self):
        return self.__fakultas
    # set fakultas
    def set_fakultas(self, fakultas):
        self.__fakultas = fakultas