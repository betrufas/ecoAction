
class Usuario:
    def __init__(self, name):
        self.name = name
        self.tweets = []
        self.points = 0
    def addTweet(self, twit):
        self.tweets.append(twit)

    def subir_nivel(self, nivel_animal, cursor):
        if self.points < 1 or self.points > 0:
            input = (nivel_animal[0], self.name)
            sql_update_query = "UPDATE Levels SET level_name = '%s'  WHERE twitter_name = '%s'"
            cursor.execute(sql_update_query, input)
        else:
            for i in range(len(nivel_animal)):
                if self.points == 10 * i:
                    input = (nivel_animal[i], self.name)
                    sql_update_query = "UPDATE Levels SET level_name = '%s'  WHERE twitter_name = '%s'"
                    cursor.execute(sql_update_query, input)

