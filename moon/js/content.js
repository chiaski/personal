const path = require('path');

module.exports = {
  entry: './src/index.js',
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'bundle.js'
  }
};

ReactDOM.render(
  <h1>Hello World!</h1>,
  document.getElementById('root')
);
