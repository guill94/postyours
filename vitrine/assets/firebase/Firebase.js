import {initializeApp} from 'firebase/app';
import { getAuth } from 'firebase/auth';
import {getStorage} from 'firebase/storage'

const config = {

    apiKey: "AIzaSyCcmxkFulzgmRW-QulyBVO83tr23y0-vkA",
    authDomain: "bsntest-16b9d.firebaseapp.com",
    databaseURL: "https://bsntest-16b9d-default-rtdb.europe-west1.firebasedatabase.app",
    projectId: "bsntest-16b9d",
    storageBucket: "bsntest-16b9d.appspot.com",
    messagingSenderId: "279549366621",
    appId: "1:279549366621:web:ff01b68cacd3ea668918b4",
    measurementId: "G-6VZ8K5N137"
    /*apiKey: process.env.REACT_APP_API_KEY,
    authDomain: process.env.REACT_APP_AUTH_DOMAIN,
    databaseURL: process.env.REACT_APP_DATABASE_URL,
    projectId: process.env.REACT_APP_PROJECT_ID,
    storageBucket: process.env.REACT_APP_STORAGE_BUCKET,
    messagingSenderId: process.env.REACT_APP_MESSAGING_SENDER_ID,
    appId: process.env.REACT_APP_APP_ID,
    measurementId: process.env.REACT_APP_MEASUREMENT_ID*/
  
  };
  
  
  export const app = initializeApp(config);
  export const storage = getStorage(app);

  export const auth = getAuth(app);


