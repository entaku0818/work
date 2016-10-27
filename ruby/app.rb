require 'sinatra'
require_relative '/Users/endo/work/ruby/bbt-login/bbtScoreGet.rb'
bbtScraping = BbtScraping.new()

get '/' do
  @score = bbtScraping.scoreGet("FA132010", "soccer10")
  erb :index
end
