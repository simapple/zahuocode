#coding:utf-8
import urllib2
import re

baidu_url = "http://www.baidu.com"
baidu_body = urllib2.urlopen(baidu_url).read()
print baidu_body.decode('utf-8','ignore')

baidu_chinese = "百度"
print baidu_chinese.decode('utf-8')
search_baidu_chinses = re.search(".*("+baidu_chinese.decode('utf-8')+").*",baidu_body.decode('utf-8','ignore'))
print search_baidu_chinses.groups()
