# coding=<encoding name>
import random
import tweepy as tp
from usuario import Usuario
import mysql.connector
from mysql.connector import errorcode
import time

nivel_animal = ['SAPO DORADO', 'PATO MARIANA', 'GUACAMAYO AZUL', 'DODO', 'DELFIN BAIJI', 'TORTUGA DE LA ISLA DE PINTA',
                'FOCA MONJE', 'RINOCERONTE LANUDO', 'OSO GRIZZLY MEXICANO', 'TIGRE DIENTES DE SABLE',
                'MAMUT LEGENDARIO']
retos = ['¡#retoEco del dia! \nLos ascensores son innecesarios cuando tienes piernas. ¡Sube por las escaleras en vez'
              ' de coger el ascensor! El nombre del reto es: Escaleras',
        '¡#retoEco del día!\nEs importante beber agua, pero siempre de manera sostenible. ¡Sube una foto con tu botella '
        'reutilizable!\nEl nombre del reto es: Hidratado.',
        '¡#retoEco del día!\nLas bolsas de plástico contaminan mucho, pero las de papel están hechas con árboles.'
        ' ¡Lleva una bolsa de tela a la compra!\nEl nombre del reto es: Bolsa',
        '¡#retoEco del día!\nA la hora de comer, no nos olvidemos de ser sostenibles. ¡Evita los plásticos llevando tu '
        'comida en fiambrera de vidrio!\nEl nombre del reto es: Tuper.',
        '¡#retoEco del día!\nLas ciudades siempre están llenas de humo, y queremos cambiar eso. ¡Usa transporte público'
        ' para desplazarte! \nEl nombre del reto es: Transporte',
        '¡#retoEco del día!\nRefrescate con un vaso o en botella de vidrio. ¡Hoy, evita las latas!\nEl nombre del reto'
        ' es: Lata',
        '¡#retoEco del día!\nHay días agotadores, y el café es necesario, pero si te lo vas a llevar no tires el envase.'
        ' ¡Toma café en tu propia taza! \nEl nombre del reto es: Café',
        '¡#retoEco del día!\nLa industria cárnica es una de las que más contamina en todo el mundo. ¡Evita los productos'
        ' de origen animal un día!\nEl nombre del reto es: Veggie',
        '¡#retoEco del día!\nLos aerosoles son capaces de hacer grandes daños en la capa de ozono. ¡No uses sprays! '
        '\nEl nombre del reto es: Spray',
        '¡#retoEco del día!\nLos baños relajantes gastan muchísima agua. ¡Dúchate en menos de 10 minutos! \nEl nombre '
        'del reto es: Ducha',
        '¡#retoEco del día!\nEstos retos no funcionan si no se hacen en comunidad. ¡Haz uno de los retos anteriores '
        'con un amigo! \nEl nombre del reto es: Amigo',
        '¡#retoEco del día!\nCada día se gastan toneladas de papel innecesariamente. ¡Enseñanos tus archivos digitales'
        ' o en papel reciclado! \nEl nombre del reto es: Papel',
        '¡#retoEco del día!\nMuévete por el medio ambiente. ¡Desplázate caminando o en bicicleta! \nEl nombre del '
        'reto es: Movimiento',
        '¡#retoEco del día!\nHay muchas maneras de aportar tu grano de arena. ¡Usa el buscador ECOSIA para navegar '
        'por Internet! \nEl nombre del reto es: Ecosia']
keywords = ['Escaleras', 'Hidratado', 'Tuper', 'Transporte', 'Lata', 'Café', 'Veggie', 'Spray', 'Ducha', 'Amigo', 'Papel', 'Movimiento', 'Ecosia']

APIKey = 'utRs16PVfFnndPENCIKfzycaC'
APISKey = 'L752lEeIjhnDNrHsX1uNzU0e4ZgtrpZ5ziEoqqxtn142fbgI0f'
AccessToken = '1143584399142862849-0LN0Q6Lc23utdNTmkOk9Bsphn4OOti'
AccessSToken = 'RTXAfnRzd1bYdtlUnfxvwYaUIVblPhiVJNlINpLOA83dG'

auth = tp.OAuthHandler(APIKey, APISKey)
auth.set_access_token(AccessToken, AccessSToken)
api = tp.API(auth)
pos = random.randint(0, len(retos) - 1)
user_list = []
i = 0
cnx = mysql.connector.connect(user='mamut', password='Mamut_1234',host='localhost',db='mamuthack',auth_plugin='mysql_native_password')
cursor = cnx.cursor()

print(cnx.is_connected())
j=0
while (j<1):

    print("llega")
    api.update_status(retos[0] + str(random.randint(0,134567744)))
    time.sleep(0)
    twits = tp.Cursor(api.search, q="#retoEco").items(100)
    for tweet in twits:
        sn = tweet._json["user"]["screen_name"]
        txt = tweet.text
        if sn in list(filter(lambda x: x.name == sn, user_list)):
            filter(lambda x: x.name == sn, user_list).addTweet(txt)
        else:
            usr = Usuario(sn)
            usr.addTweet(txt)
            user_list.append(usr)

        i = i+1
    
    challengers = []

    for user in user_list :
        if (user.name !='ChotaWar' or user.name in challengers):
            challengers.append(user.list)
            for twit in user.tweets:
                if(keywords[0] in twit):
                    api.update_status('El usuario: '+'@'+ user.name + ' ha logrado el reto del día' + str(random.randint(0,134567744)))
                    inp = (user.name,)
                    print(user.name)
                    points = "SELECT us.tracking_num FROM Users AS us WHERE us.twitter_name = %s"
                    cursor.execute(points, inp)
                    upoints = list(cursor.fetchone())
                    user.points = upoints[0] + 1                    #if cursor.fetchone()[0]:
                    inp = (user.points, user.name)
                    sql_update_query = "UPDATE Users SET tracking_num = %s  WHERE twitter_name = %s"
                    cursor.execute(sql_update_query,inp)
                    cnx.commit()
                    print("hola")
                    break
                #if(user.points%10 == 0 and user.points < 101 or user.points == 0 or user.points == 1):
                    #user.subir_nivel(nivel_animal, cursor)
    j= j+1
cursor.close()
cnx.close()
