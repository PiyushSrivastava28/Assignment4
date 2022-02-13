import pandas as pd
from datetime import datetime
def remove_non_ascii(s):
    return "".join(c for c in s if ord(c)<128)
data = pd.read_csv('Book1.csv')
i=0
new_names=[]
for row in data.iterrows():
    if data['NAMES'][i]=='Third degree connection· 3rd' or data['NAMES'][i]=='Second degree connection· 2nd' or data['NAMES'][i]=='First degree connection· 1st':
        name=data['NAMES'][i-1]
        tagline=data['NAMES'][i+1]
        newtagline=tagline.split()
        location=data['NAMES'][i+2]
        x=0
        tagline=""
        for ele in newtagline:
            x+=1
            if(x<=2 and ele.isalpha()):
                tagline+=ele
            elif(x>2):
                break
        overall=name+" , "+tagline+" , "+location
        overall= remove_non_ascii(overall)
        new_names.append(overall)
    i+=1
dict={'NAME':new_names}
df=pd.DataFrame(dict)
current_date = datetime.now()
filename = str(current_date.day)+str(current_date.month)+str(current_date.year)+str(current_date.hour)+str(current_date.minute)
df.to_csv(str(filename + '.csv'))
print("New file: "+filename)
input("Press any key or Enter to exit 😁")