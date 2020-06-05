#
# Convert "SCARF News" RSS feed into rst file for sphinx
#

import feedparser
import ssl
from datetime import timedelta,datetime

url = "http://www.jiscmail.ac.uk/cgi-bin/webadmin?RSS&L=SCARF-USERS&v=2.0&LIMIT=10"

if hasattr(ssl, '_create_unverified_context'):
    ssl._create_default_https_context = ssl._create_unverified_context

feed = feedparser.parse(url)

#print ("document.write('\\")

for news_item in feed.entries:

  date = "(%d/%02d/%02d)" % (news_item.published_parsed.tm_year,\
    news_item.published_parsed.tm_mon, \
    news_item.published_parsed.tm_mday)

#  print ("`" + date + " ..... " + news_item.title + " <" + news_item.link + ">`_")
#  print ("")



  print (date + "..... <a href=" + news_item.link + ">" + news_item.title + "</a>")
  print ("<br><br>")

#print ("');")
