const animate = function (obj, target, callback) {
  clearInterval(obj.timer)
  obj.timer = setInterval(function () {
    let step = (target - obj.offsetLeft) / 10
    step = step > 0 ? Math.ceil(step) : Math.floor(step)
    if (obj.offsetLeft == target) {
      // 停止动画 停止定时器
      clearInterval(obj.timer)
      callback && callback()
    }
    // 把每次加1 这个步长值改为一个慢慢变小的值  步长公式：(目标值 - 现在的位置) / 10
    obj.style.left = obj.offsetLeft + step + 'px'

  }, 15)
}

window.onload = function () {

  // 获取轮播图的盒子
  const box = document.getElementById('sliderBox')

  // 获取轮播图
  var imgNum = box.getElementsByClassName('sliderBoxItem')
  if (imgNum.length < 2) return
  // 克隆第一张图片放到最后面
  var first = imgNum[0].cloneNode(true)
  box.appendChild(first)

  // 设置统一 index
  var num = 0

  var swiper = function () {

    if (num == imgNum.length - 1) {
      box.style.left = 0
      num = 0
    }
    num++
    // console.log(box, -num * box.offsetWidth)
    animate(box, -num * box.offsetWidth)

  }

  // 先显示第一个，再执行定时器
  autoSwiper && clearInterval(autoSwiper)
  var autoSwiper = setInterval(() => {
    swiper()
  }, 5000)
}