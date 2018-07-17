var express = require('express');
var router = express.Router();
var mongoose = require('mongoose');
mongoose.connect('mongodb://localhost:27017/test', {useNewUrlParser: true});

// create Schema
var Schema = mongoose.Schema;

var UserSchema = new Schema({
  title: {type: String, required: true},
  content: String,
  author: String
}, {collection: 'user-data'});

// create model
var userModel = mongoose.model('UserData', UserSchema);

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index');
});

router.get('/get-data', function(req, res, next){
  userModel.find()
    .then(function(doc){
      res.render('index', {items: doc});
    });
});

router.post('/insert', function(req, res, next){
  var item = {
    title: req.body.title,
    content: req.body.content,
    author: req.body.author
  }

  var data = new userModel(item);
  data.save();
  
  res.redirect('/');
});

router.post('/update', function(req, res, next){
  var id = req.body.id;

  userModel.findById(id, function(err, doc){
    if(err){
      console.error('error, user not found');
    }
    doc.title = req.body.title;
    doc.content = req.body.content,
    doc.author = req.body.author
    doc.save();
  });
  
  res.redirect('/');
});

router.post('/delete', function(req, res, next){
  var id = req.body.id;

  userModel.findByIdAndRemove(id).exec();
  
  res.redirect('/');
});

module.exports = router;
