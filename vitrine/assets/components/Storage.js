import React, {useState} from 'react';
import axios from 'axios';
import { storage } from '../firebase/Firebase';
import { getDownloadURL, ref, uploadBytesResumable } from 'firebase/storage';

export const Storage = () => {

    const [image, setImage] = useState([]);
    const [url, seturl] = useState();
    const [progress, setProgress] = useState(0)

    const handleChange =(e) => {
        if (e.target.files[0]) {
        const img = e.target.files[0]
        console.log(img)
        handleForm(e, img);
        }
    }
    const handleForm = (e, img) => {
        e.preventDefault();
        console.log(img)
        if (img) {
           
        
        const url = 'http://127.0.0.1:8000/api/storage';
        const file = img;
        uploadFile(url, file);
        console.log(file);
        }
    }

    

    const uploadFile = (url, file) => {
        let formData = new FormData();
        formData.append("file", file);
        axios.post(url, formData, {
            headers: {
              "Content-Type": "multipart/form-data",
            },
          }).then((response) => {
            console.log(response);
          }).catch((error) => {
            console.log(error);
          });
      };


      /*const handleForm = (e) => {
          e.preventDefault();
          const file = e.target[0].files[0];
          uploadFile(file);
      }

      const uploadFile = (file) => {
        const storageRef = ref(storage, `files/${file.name}`);
        const uploadTask = uploadBytesResumable(storageRef, file);
        uploadTask.on("stat_changed", (snapshot) =>{
            const prog = Math.round(
                (snapshot.bytesTransferred / snapshot.totalBytes) * 100
            );
            setProgress(prog);
        }, (err) => console.log(err),
            () => {
                getDownloadURL(uploadTask.snapshot.ref).then((url) => console.log(url));
            }
        )
      }*/

    return (
        <div>
           { /*<label htmlFor="imageUpload" className="btn btn-primary btn-block">Select</label>*/}
            <form onSubmit={handleForm}>
            <input onChange={handleChange} type="file" id="imageUpload" className="d-non" />
            <button >Upload</button>
            
            </form>
            {/*<h3>Uploaded {progress} %</h3>*/}
        </div>
    )
}

export default Storage;
