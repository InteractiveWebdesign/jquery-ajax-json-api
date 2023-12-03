// const express = require('express');
// const bodyParser = require('body-parser');

// const app = express();
// const port = 3000;

// // Add CORS middleware here
// app.use((req, res, next) => {
//   res.header('Access-Control-Allow-Origin', '*');
//   res.header('Access-Control-Allow-Methods', 'GET,PUT,POST,DELETE');
//   res.header('Access-Control-Allow-Headers', 'Content-Type');
//   next();
// });

// app.use(bodyParser.json());

// const products = [
//   { id: 1, name: 'Product 1', price: 19.99 },
//   { id: 2, name: 'Product 2', price: 29.99 },
//   { id: 3, name: 'Product 3', price: 39.99 },
// ];

// // GET all products
// app.get('/api/products', (req, res) => {
//   res.json(products);
// });

// // GET a specific product by ID
// app.get('/api/products/:id', (req, res) => {
//   const productId = parseInt(req.params.id);
//   const product = products.find((p) => p.id === productId);

//   if (product) {
//     res.json(product);
//   } else {
//     res.status(404).json({ message: 'Product not found' });
//   }
// });

// app.listen(port, () => {
//   console.log(`Server is running at http://localhost:${port}`);
// });
const express = require('express');

const app = express();
const port = 3000;

app.get('/', (req, res) => {
  res.send('Hello from my Express API!');
});

app.listen(port, () => {
  console.log(`Server started on port ${port}`);
});