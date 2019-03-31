import requests
import urllib, json



headers = {
        'x-api-key' : 'WQXjxcLrtedzCdldj4WTjJu3YXIVad6DWXZBZ2w3'
}


response = requests.get("https://api.propublica.org/congress/v1/bills/search.json?query=gun control" , headers=headers);



print(response.content)
print (response.status_code);

#response_abortion = requests.get("https://api.propublica.org/congress/v1/bills/search.json?query=abortion", headers=headers);
#print(response_abortion.content);
#print(response_abortion.status_code);
