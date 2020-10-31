/* Responsável pelo Funcionamento do Accordian no Menu */
$(function() {
	var Accordion = function(el, multiple) {
		this.el = el || {};
		this.multiple = multiple || false;

		var links = this.el.find('.link');
		links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
	}

	Accordion.prototype.dropdown = function(e) {
		var $el = e.data.el;
			$this = $(this),
			$class = this.childNodes[0].className,
			$next = $this.next();
			
		if($class === 'fas fa-angle-right'){
			this.childNodes[0].className = 'fas fa-angle-down';
		}else{
			this.childNodes[0].className = 'fas fa-angle-right';
		}

		$next.slideToggle();
		$this.parent().toggleClass('open');

		console.log(!e.data.multiple)

		if (!e.data.multiple) {
			$el.find('.submenu').not($next).slideUp().parent().removeClass('open');
		};
	}	
	var accordion = new Accordion($('#sidebar-aplicacao'), false);
});