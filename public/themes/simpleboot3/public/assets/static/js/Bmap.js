$(function () {
	// 百度地图开始
	var map = new BMap.Map("contact_map");          // 创建地图实例  
	var point = new BMap.Point(121.472967,31.273482);  // 创建点坐标  
	map.centerAndZoom(point, 15);                 // 初始化地图，设置中心点坐标和地图级别  

	var marker = new BMap.Marker(point);        // 创建标注    
	map.addOverlay(marker); 
	map.enableScrollWheelZoom(true);
	// var label = new BMap.Label("徐州亿网科技有限公司 电话：0516-85645808",{offset:new BMap.Size(20,-10)});
	// marker.setLabel(label);
	// 百度地图结束
})