require_relative 'UrlEncode.rb'
urledit = Urledit.new()


	File.open("/Users/endo/work/ruby/url-encode/urlList.txt", "r:utf-8") do |f|
		f.each_line do |line|
			urlArray = line.chomp.split(",")
			urledit.urlEncode(urlArray[0], urlArray[1])
		end
	end
