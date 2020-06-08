#!/bin/bash

NEWS_TEMPLATE=/sphinx/scarf/build/html/scarf_news_template.html
NEWS_PAGE=/sphinx/scarf/build/html/scarf_news.html
RSS_FEED=/sphinx/scarf/tmp/rss_feed.html

cp -f $NEWS_TEMPLATE $NEWS_PAGE

/usr/bin/python /sphinx/scarf/scripts/rss2html.py > $RSS_FEED

sed -i -e "/taken from the SCARF NEWS Mailing List RSS feed/r $RSS_FEED" $NEWS_PAGE 
