var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('index', { title: 'Form Validation', success: req.session.success, errors: req.session.errors });
  req.session.success = null;
  req.session.errors = null;
});

router.post('/submit', function(req, res, next){
  req.check('email', 'Email address not valid').isEmail();
  req.check('password', 'Password not valid').isLength({min: 4}).equals(req.body.confirmPassword);

  var errors = req.validationErrors();
  if(errors){
    req.session.errors = errors;
    req.session.success = false;
  }else{
    req.session.success = true;
  }
  res.redirect('/');
});

module.exports = router;
