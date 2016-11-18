require 'uri'


class Urledit
	def urlEncode(url, param)
		url_after = '<a href="' + url + URI.escape(param) + '">' + param + '</a>'

		puts url_after
	end
end
