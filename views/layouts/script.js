btnSearch.onclick = btn4Handler
korzina.onclick = korzinaHandler
popup.onclick = popupHandler
var arr = [] 
for(var i = 0;i < btns.length;i++){
	arr[i] = btns[i]
} 
//новый массив, в который добавляются все значения  btns[i] (все кнопки 'добавить в корзину')
// var goodInCard;
arr.forEach(function(item){
	item.onclick = function(){
		var currentGoodName = this.getAttribute('ddd')
		var goods = cardBlock.children
		for(var i = 0; i < goods.length; i++){
			if(goods[i].getAttribute('ddd') == currentGoodName){
				goods[i].children[2].value = parseInt(goods[i].children[2].value,10) + 1
				return
			}
		}

		var currentGood = str.filter(function(item){
			return item.name == currentGoodName
		})
		var outerCard = document.createElement('div')
		outerCard.setAttribute('ddd',currentGoodName)

		var goodInCard = document.createElement('div')
		goodInCard.innerHTML = currentGood[0].name
		goodInCard.style.float = 'left'

		var inp = document.createElement('input')
		inp.setAttribute('type', 'number')
		inp.value = 1
		inp.style.float = 'right'

		var closer = document.createElement('div')
		closer.innerHTML = 'X'
		closer.style.float = 'right'
		closer.onclick = function(){
			cardBlock.removeChild(this.parentElement)
		}

		var clearfix = document.createElement('div')
		clearfix.style.clear = 'both'

		outerCard.appendChild(goodInCard)
		outerCard.appendChild(closer)
		outerCard.appendChild(inp)
		outerCard.appendChild(clearfix)


		cardBlock.appendChild(outerCard)
		// cardBlock.innerHTML += '<div class = "good-in-card" ' +
		// 	'ddd="'+currentGood[0].name+'">'+currentGood[0].name+'</div>'
	}
})
cardBlock.onclick = function(event){
	if(event.target.classList.contains('good-in-card')){
		var goodInCard = document.getElementsByClassName('good-in-card')
		var temp = []
		for(var k = 0; k < goodInCard.length; k++){
			temp[k] = goodInCard[k]
		}
		cardBlock.innerHTML = ''
		for (var j = 0; j < temp.length; j++){
			if(temp[j].getAttribute('ddd')!=event.target.getAttribute('ddd')){
				cardBlock.innerHTML += temp[j].outerHTML
			}
		}
	}
}



function korzinaHandler(){
	if(cardBlock.style.display === 'none'){
		cardBlock.style.display = 'block'
		popup.style.display = 'block'
	}
}
//функция, которая меняет свойство cardBlock и popup на display none
function popupHandler(){
	cardBlock.style.display = 'none'
	popup.style.display = 'none'
}