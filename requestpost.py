import json
from datetime import datetime
import random
import requests


x = random.randint(1,200)
def dt_parser (dt):
    if isinstance(dt, datetime):
        return dt.isoformat()
recebe = json.dumps ({"sensorId": "1","prediction": x, "data": datetime.now()}, default=dt_parser)
print(f"{recebe}")

resposta = requests.post("http://localhost/exercicio/index.php", data=recebe)

print(resposta.content)

