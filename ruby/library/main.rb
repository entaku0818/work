require('./open_search_client.rb')
o = OpenSearchClient.new
res =  o.get_book_info_by_isbn('978-4774163666')
puts res.elements['//rss/channel/item/title'].text

