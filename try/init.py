#coding:utf-8
from BeautifulSoup import BeautifulSoup
import requests

url = "http://www.ipdizhi.com/ss1.php"

#set a ,b get value 
def getresult(a, b):
    data = {"aa":a, "bb":b, "tijiao":"运算"}
    R = requests.post(url,data = data)
    return R.text
#a = ... b = ... result = ...     
def translateresult(responsetext):
    bs = BeautifulSoup(responsetext)
    a = bs.find("input",{"name":"aa"})['value']
    b = bs.find("input",{"name":"bb"})['value']
    result = bs.find("b").text
    return a,b,result
if __name__ == "__main__":
    t =  getresult("qWaYmA,,",6)
    print translateresult(t)
