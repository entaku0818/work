# 必要なgemを読み込み。読み込み方やその意味はrubyの基本をおさらいして下さい。
require 'nokogiri'
require 'anemone'

# 後述。
opts = {
    depth_limit: 0
}

# AnemoneにクロールさせたいURLと設定を指定した上でクローラーを起動！
Anemone.crawl("http://www.nicovideo.jp/ranking", opts) do |anemone|
  # 指定したページのあらゆる情報(urlやhtmlなど)をゲットします。
  anemone.on_every_page do |page|
    i = 1 # 後で使います。

    # page.docでnokogiriインスタンスを取得し、xpathで欲しい要素(ノード)を絞り込む

    page.doc.xpath("/html/body/div[contains(@class,'container column1024-0')]/div[contains(@class,'inner')]/div[contains(@class,'column main')]/section[@class='matrix video']/ol[contains(@class,'item_rows')]/li[contains(@class,'item_row rank')]/div[contains(@class,'item_cel')]").each do |node|
  

      # 絞り込んでTitle部分を抽出
	title = node.xpath("./div[contains(@class,'item')]/a[contains(@class,'itemContent')]/p[contains(@class,'itemTitle')]/span/text()")      
      # 絞り込んで再生数に当たる部分を抽出      
      viewCount =  node.xpath("./div[contains(@class,'item')]/a[contains(@class,'itemContent')]/div[contains(@class,'itemData')]/dl[contains(@class,'play')]/dd/text()")

      
        puts title
        puts viewCount
      # 表示形式に整形
      puts "\n———————————————–\n"
      i += 1 # iは順位を示しています。あるランキングを上から順番に取り出しています。
    end # node終わり
  end # page終わり
end # Anemone終わり
