<script src="js/jquery.js"></script>
<script src="js/popup_nav.js"></script>
<script src="js/jquery.tools.min.js"></script>
<script src="js/smartRollover.js"></script>
<script>
        
		$(function() {
			// setup ul.tabs to work as tabs for each div directly under div.panes
			$("#index_mem ul.tabs").tabs(" div.p-mem > div");
			$("#index_area ul.tabs").tabs(" div.p-area > div");
			$("#group_info ul.tabs").tabs(" div.p-info > div");
			$("#member_info ul.tabs").tabs(" div.p-info > div");
			$(".page-content ul.tabs").tabs(" div.p-info > div");
			$(".tab-style01 ul.tabs").tabs(" div.p-info > div");
		});
		
</script>