function SelectText(e){var t,n,o=document,c=e;o.body.createTextRange?(t=document.body.createTextRange(),t.moveToElementText(c),t.select()):window.getSelection&&(n=window.getSelection(),0===n.toString().length&&(t=document.createRange(),t.selectNodeContents(c),n.removeAllRanges(),n.addRange(t)))}
//# sourceMappingURL=maps/main.js.map
