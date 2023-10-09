'use stric'
const express = require('express')
const app = express()

app.get('/', function (req, res) {
  res.sendFile((__dirname, 'cv/cv.html'))
})


app.listen(3000)