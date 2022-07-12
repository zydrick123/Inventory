const barcodes = document.getElementByName('barcodes')
const product = document.getElementByName('product')
const unit = document.getElementByName('unit')
const quant = document.getElementByName('quant')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')
form.addEventListener('submit', (e) => {
  let messages = []
  if (barcodes.value === '' || barcodes.value == null) {
    messages.push('barcodes is required')
    errorElement.value ="asdad";
  }

  if (product.value === '' || barcodes.value == null) {
    messages.push('Product Description is required')
  }
  

  if (messages.length > 0) {
    e.preventDefault()
    errorElement.innerText = messages.join(', ')
  }
})