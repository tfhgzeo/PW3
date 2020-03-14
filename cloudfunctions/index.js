const functions = require('firebase-functions');

const admin = require('firebase-admin');
admin.initializeApp();

exports.deleteDocument = functions.https.onRequest(async (req) => {
    let col = req.query.colecao;
    let id = req.query.id;

    admin.firestore().collection(col).doc(id).delete().then( () => {
        alert("documento deletado");     
    })
})