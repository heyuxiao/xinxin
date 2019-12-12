function numArr(){
				var arr = JSON.parse(localStorage.getItem('cart'))
				var num=0;
				for(var i=0;i<arr.length;i++){
					num += arr[i].num;
				}
				return num;
			}
			$('.numArr').html(numArr())