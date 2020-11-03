import {
    Stitch,
    RemoteMongoClient,
    AnonymousCredential
} from "mongodb-stitch-browser-sdk";

const client = Stitch.initializeDefaultAppClient('complainsystem-rasjc');

const db = client.getServiceClient(RemoteMongoClient.factory, 'mongodb-atlas').db('systemreport');

client.auth.loginWithCredential(new AnonymousCredential()).then(user =>
  db.collection('complain').updateOne({owner_id: client.auth.user.id}, {$set:{number:42}}, {upsert:true})
).then(() =>
  db.collection('complain').find({owner_id: client.auth.user.id}, { limit: 100}).asArray()
).then(docs => {
    console.log("Found docs", docs)
    console.log("[MongoDB Stitch] Connected to Stitch")
}).catch(err => {
    console.error(err)
});
