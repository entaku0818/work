require 'nokogiri'
require 'mechanize'




class BbtScraping
    def scoreGet(loginId,password)

  agent = Mechanize.new
  agent.user_agent_alias = 'Mac Safari 4'

  agent.get('https://aircamp.us/course/result') do |page|

  mypage = page.form_with(id: 'loginForm') do |form|
    # ログインに必要な入力項目を設定していく
    # formオブジェクトが持っている変数名は入力項目(inputタグ)のname属性
    form.userId = loginId
    form.password = password
  end.submit

        #HTML読み込み
        doc = Nokogiri::HTML(mypage.content.toutf8)

        scores = []

                 doc.xpath("/html/body/div[contains(@id,'container')]/div[contains(@class,'container_box')]/div[contains(@id,'content')]/div[contains(@id,'main')]/div/div[contains(@class,'result-box')]/div/div[contains(@class,'score-result')]").each do |node|

                # 絞り込んでTitle部分を抽出:
                 score = node.xpath("./p[contains(@class,'score')]/text()")
                course = node.xpath("./h4/a/text()")

                scores.push([course.to_s,score.to_s])


                end

                score_gpa = 0
                course_count = 0
                    scores.each do |score|


                        if score[1] == ("A+")
                                score_gpa = score_gpa+4
                                course_count = course_count + 1
                        elsif score[1] == ("A")
                                score_gpa = score_gpa+3
                                course_count = course_count + 1
                        elsif score[1] == ("B")
                                score_gpa = score_gpa+2
                                course_count = course_count + 1
                        elsif score[1] == ("C")
                                score_gpa = score_gpa+1
                                course_count = course_count + 1
                        elsif score[1] == ("F")
                                course_count = course_count + 1
                        end

                    end

                return [scores, (score_gpa.to_f / course_count).to_s]

                end
        end



end
