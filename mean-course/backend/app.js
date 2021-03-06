const express = require('express');
const app = express();
const bodyParser = require('body-parser');
const mongoose = require('mongoose');
mongoose.connect('mongodb+srv://your-url-here')
  .then(() => {
    console.log('DB connection succeeded.');
  })
  .catch(() => {
    console.log('DB connection error.')
  });

const Post = require('./models/post');

app.use(bodyParser.json());
app.use(bodyParser.urlencoded({extended: false}));

app.use((req, res, next) => {
  res.setHeader("Access-Control-Allow-Origin", "*");
  res.setHeader("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-type, Accept");
  res.setHeader("Access-Control-Allow-Methods", "GET, POST, PATCH, PUT, DELETE, OPTIONS")

  next();
});

app.post('/api/posts', (req, res, next) => {
  const post = new Post({
    title: req.body.title,
    content: req.body.content
  });
  post.save().then(createdPost => {
    res.status(201).json({
      message: 'Post added successfully',
      postId: createdPost._id
    });
  });
});

app.put('/api/posts/:id', (req, res, next) => {
  const post = new Post({
    _id: req.body.id,
    title: req.body.title,
    content: req.body.content
  });
  Post.updateOne({_id: req.params.id}, post).then(updatedPost => {
    res.status(200).json({
      message: 'Post updated successfully',
      postId: updatedPost._id
    });
  });
});

app.get('/api/posts', (req, res, next) => {
  Post.find()
    .then((documents) => {
      res.status(200).json({
        message: 'Posts fetched successfully',
        posts: documents
      });
    });
});

app.get('/api/posts/:id', (req, res, next) => {
  Post.findById(req.params.id)
    .then((post) => {
      if(post) {
        res.status(200).json(post);
      } else {
        res.status(404).json({message: 'Post not found'})
      }
    });
});

app.delete('/api/posts/:id', (req, res, next) => {
  Post.deleteOne({
    _id: req.params.id
  })
  .then((result) => {
    console.log(result);
    res.status(200).json({
      message: 'Post deleted successfully'
    });
  });
});

module.exports = app;
