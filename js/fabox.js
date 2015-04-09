(function($) {
    $.extend(jQuery.fn, {
        fabox: function(method, args) {
            var scope = this;
            var width_screen = $(window).width();
            var height_screen = $(window).height();
            if (typeof(method) !== 'string') {
                args = method;
                scope.locked = false;
                $(scope).addClass('fabox');
                $(scope).addClass('loading').html('<div class="close-box"><i class="fa fa-times"></i></div><div class="framebox"><i class="fa fa-spinner fa-spin"></i><div class="content-frame"></div></div>');
                $(scope).unbind();
                $(scope).find('.framebox').unbind();
                $(scope).find('.close-box').unbind();
                $(scope).bind('click', function() {
                    if(!scope.locked) {
                        $(scope).fabox('close', null);
                    }
                });
                $(scope).find('.framebox').bind('click', function() {
                    scope.locked = true;
                    window.setTimeout(function() {
                        scope.locked = false;
                    }, 200);
                });
                $('body').keydown(function (e) {
                    if(e.keyCode == 27) {
                        $(scope).fabox('close', null);
                    }
                })
                $(scope).find('.close-box').bind('click', function() {
                    $(scope).fabox('close', null);
                });
            }
            else {
                switch(method) {
                    case 'write':
                        var content = (typeof(args.content) != 'undefined') ? args.content : '';
                        var width = (typeof(args.width) != 'undefined') ? args.width : 0;
                        var height = (typeof(args.height) != 'undefined') ? args.height : 0;
                        var control = (typeof(args.control) != 'undefined') ? args.control : true;
                        var loaded = (typeof(args.loaded) != 'undefined') ? args.loaded : false;
                        var open = (typeof(args.open) != 'undefined') ? args.open : false;
                        var full = (typeof(args.full) != 'undefined') ? args.full : false;
                        var show = (typeof(args.show) != 'undefined') ? args.show : false;
                        var full_text = (typeof(args.full_text) != 'undefined') ? args.full_text : false;
                        var mode_closebox = (typeof(args.mode_closebox) != 'undefined') ? args.mode_closebox : 'full';
                        $(scope).find('.framebox .content-frame').html(content);
                        if(open) {
                            $(scope).fabox('open', {speed: '200'});
                        }
                        if(loaded) {
							window.setTimeout(function() {
								$(scope).fabox('resize', {width: width, 
														  height: height, 
														  control: control, 
														  full: full, 
														  show: show, 
														  full_text: full_text, 
														  mode_closebox: mode_closebox});
							}, 10);
                        }
                        else {
	                        var images_content = [];
	                        var iframe = null;
	                        $(scope).find('.framebox .content-frame iframe').each(function(k, v) {
		                        iframe = $(v);
		                    });
	                        $(scope).find('.framebox .content-frame img').each(function(k, v) {
		                        images_content.push($(v).attr('src'));
	                        });
	                        if(images_content.length > 0) {
		                        var nb_loaded = 0;
		                        for(var i = 0; i < images_content.length; i++) {
									var image = new Image();
									image.onload = function() {
										nb_loaded++;
										if(nb_loaded == images_content.length) {
											$(scope).fabox('write', {content: content, 
																	 width: width, 
																	 height: height, 
																	 control: control, 
																	 loaded: true, 
																	 full: full, 
																	 show: show, 
																	 full_text: full_text, 
																	 mode_closebox: mode_closebox});
										}
									};
									image.onerror = function() {
										nb_loaded++;
										if(nb_loaded == images_content.length) {
											$(scope).fabox('write', {content: content, 
																	 width: width, 
																	 height: height, 
																	 control: control, 
																	 loaded: true, 
																	 full: full, 
																	 show: show, 
																	 full_text: full_text, 
																	 mode_closebox: mode_closebox});
										}
									};
									image.src = images_content[i];
		                        }   
	                        }
	                        else if(iframe != null) {
								$(iframe).bind('load', function() {
			                        $(scope).fabox('write', {content: content, 
				                        					 width: $(iframe).outerWidth(), 
				                        					 height: $(iframe).outerHeight(), 
				                        					 control: control, 
				                        					 loaded: true, 
				                        					 full: full, 
				                        					 show: show, 
				                        					 full_text: full_text, 
															 mode_closebox: mode_closebox});
								});
	                        }
	                        else {
		                        $(scope).fabox('write', {content: content, 
			                        					 width: width, 
			                        					 height: height, 
			                        					 control: control, 
			                        					 loaded: true, 
			                        					 full: full, 
			                        					 show: show, 
			                        					 full_text: full_text, 
														 mode_closebox: mode_closebox});
	                        }
                        }
                    break;
                    case 'open':
                        var speed = (typeof(args.speed) != 'undefined') ? args.speed : 0;
                        $(scope).fadeIn(speed);
                    break;
                    case 'close':
                        $(scope).fadeOut(200, function() {
							$(scope).find('.framebox .content-frame').html('').removeClass('force-relative');
							$(scope).removeClass('fullgaz').removeClass('no-control');
							$(scope).addClass('loading').find('.framebox').css('width', '300px').css('height', '300px').css('margin-left', '-150px').css('margin-top', '-150px');
                        });
                    break;
                    case 'alert':
                        var title = (typeof(args.title) != 'undefined') ? args.title : '';
                        var msg = (typeof(args.msg) != 'undefined') ? args.msg : '';
                        var width = (typeof(args.width) != 'undefined') ? args.width : 450;
                        var msg_with_p = (msg != '') ? '<p>' + msg + '</p>' : '';
                        var mode_closebox = (typeof(args.mode_closebox) != 'undefined') ? args.mode_closebox : 'full';
                        $(scope).fabox('write', {content: '<div class="fabox-alert"><h3>' + title + '</h3>' + msg_with_p + '<div class="btn_actions"><div class="btn-center">OK</div></div></div>',
                                                         width: width,
                                                         open: true,
														 show: false,
                                                         full_text : true,
                                                         loaded: true, 
														 mode_closebox: mode_closebox});
                        $(scope).find('.btn-center').unbind();
                        $(scope).find('.btn-center').bind('click', function() {
                            $(scope).fabox('close', null);
                            if( typeof( args.callback ) != 'undefined' ) {
                                args.callback();
                            }
                        });
                    break;
                    case 'confirm':
                        var title = (typeof(args.title) != 'undefined') ? args.title : '';
                        var msg = (typeof(args.msg) != 'undefined') ? args.msg : '';
                        var left_btn = (typeof(args.left_btn) != 'undefined') ? args.left_btn : 'Cancel';
                        var right_btn = (typeof(args.right_btn) != 'undefined') ? args.right_btn : 'Confirm';
                        var width = (typeof(args.width) != 'undefined') ? args.width : 450;
                        var msg_with_p = (msg != '') ? '<p>' + msg + '</p>' : '';
                        var mode_closebox = (typeof(args.mode_closebox) != 'undefined') ? args.mode_closebox : 'full';
                        $(scope).fabox('write', {content: '<div class="fabox-confirm"><h3>' + title + '</h3>' + msg_with_p + '<div class="btn_actions bundle"><div class="btn-left">' + left_btn + '</div><div class="btn-right">' + right_btn + '</div><div style="clear:both;"></div></div></div>', width: width, open: true, loaded: false, mode_closebox: mode_closebox});
                        window.setTimeout(function() {
	                        $(scope).find('.btn-left').unbind();
	                        $(scope).find('.btn-right').unbind();
	                        $(scope).find('.btn-left').bind('click', function() {
                                if(typeof(args.callback_left) != 'undefined') {
                                    args.callback_left();
                                }
	                        });
	                        $(scope).find('.btn-right').bind('click', function() {
                                if(typeof(args.callback_right) != 'undefined') {
                                    args.callback_right();
                                }
	                        });
                        }, 500);
                    break;
                    case 'ajax':
                        var url = (typeof(args.url) != 'undefined') ? args.url : '';
                        var data = (typeof(args.data) != 'undefined') ? args.data : {};
                        var type = (typeof(args.type) != 'undefined') ? args.type : 'get';
                        var width = (typeof(args.width) != 'undefined') ? args.width : 0;
                        var height = (typeof(args.height) != 'undefined') ? args.height : 0;
                        var control = (typeof(args.control) != 'undefined') ? args.control : true;
                        var full = (typeof(args.full) != 'undefined') ? args.full : false;
                        var mode_closebox = (typeof(args.mode_closebox) != 'undefined') ? args.mode_closebox : 'full';
                        $(scope).fabox('open', {speed: 200});
						var request = $.ajax({
							url: url,
							type: type,
							data: data
						});						
						request.done(function(response) {
							$(scope).fabox('write', {content: response, width: width, height: height, control: control, full: full, loaded: false, mode_closebox: mode_closebox});
						});
						request.fail(function(jqXHR, textStatus) {
							$(scope).fabox('write', {content: '<h3 class="fabox-error-msg">The requested content cannot be loaded. Please try again later<h3>', width: width, height: height, control: control, full: full, loaded: false, mode_closebox: mode_closebox});
						});
                    break;
                    /*case 'gallery':
                        if (typeof(args.url) != 'undefined' && args.url != '') {
                            $(scope).fabox('open', {speed: '200'});
                            $(scope).addClass('box-img');
                            img = new Image();
                            img.onload = function() {
                                var width_img = parseInt(this.width);
                                var height_img = parseInt(this.height);
                                var old_height_img = height_img;
                                var old_width_img = width_img;
                                var twenty_percent_frame = Math.ceil(parseInt(height_screen) * 0.8);
                                if (parseInt(height_img) >= parseInt(twenty_percent_frame)) {
                                    // Si la hauteur de l'image est supérieur à 80% de la hauteur de l'écran, on optimise
                                    height_img = parseInt(twenty_percent_frame);
                                    width_img = parseInt((height_img * old_width_img) / old_height_img);
                                    old_width_img = width_img;
                                    old_height_img = height_img;
                                }
                                if (parseInt(width_img) >= width_screen) {
                                    // Si la largeur de l'image est supérieur à la largeur de l'écran, on optimise
                                    width_img = parseInt(width_screen);
                                    height_img = parseInt((width_img * old_height_img) / old_width_img);
                                    old_width_img = width_img;
                                    old_height_img = height_img;
                                }
                                $(scope).fabox('write', {content: '<img src="' + args.url + '" />', custom_width: width_img, custom_height: height_img, disable_control: true});
                            }
                            img.src = args.url;
                        }
                    break;*/
                    case 'resize':
                        var control = (typeof(args.control) != 'undefined') ? args.control : true;
                        var show = (typeof(args.show) != 'undefined') ? args.show : false;
                        var full = (typeof(args.full) != 'undefined') ? args.full : false;
                        var full_text = (typeof(args.full_text) != 'undefined') ? args.full_text : false;
						var width_frame = parseInt($(scope).find('.content-frame').outerWidth());
						var height_frame = parseInt($(scope).find('.content-frame').outerHeight());
                        var mode_closebox = (typeof(args.mode_closebox) != 'undefined') ? args.mode_closebox : 'full';
                        if(width_frame == 0) {
							width_frame = parseInt($(scope).find('.framebox').outerWidth());
                            if (width_frame == 0) {
                                width_frame = 300;
                            }
                        }
                        if(height_frame == 0) {
							height_frame = parseInt($(scope).find('.framebox').outerHeight());
                            if (height_frame == 0) {
                                height_frame = 300;
                            }
                        }
                        var width = (typeof(args.width) != 'undefined' && parseInt(args.width) > 0) ? parseInt(args.width) : parseInt(width_frame);
                        var height = (typeof(args.height) != 'undefined' && parseInt(args.height) > 0) ? parseInt(args.height) : parseInt(height_frame);
						var twenty_percent_wscreen = parseInt(Math.ceil(parseInt(width_screen) * 0.8));
						var twenty_percent_hscreen = parseInt(Math.ceil(parseInt(height_screen) * 0.8));
                        if(width > twenty_percent_wscreen) {
							if (width_screen > 500) {
								width = twenty_percent_wscreen;
							}
							else {
								if (width > width_screen) {
									width = twenty_percent_wscreen;
								}
							}
                        }
                        if(height > twenty_percent_hscreen) {
	                       height = twenty_percent_hscreen;
                        }
                        var margin_left = Math.ceil(parseInt(width) / 2);
                        var margin_top = Math.ceil(parseInt(height) / 2);
                        
                        /*console.log('*****************************');
                        console.log('width_screen ' + width_screen);
                        console.log('height_screen ' + height_screen);
                        console.log('twenty_percent_wscreen ' + twenty_percent_wscreen);
                        console.log('twenty_percent_hscreen ' + twenty_percent_hscreen);
                        console.log('width_frame ' + width_frame);
                        console.log('height_frame ' + height_frame);
                        console.log('width ' + width);
                        console.log('height ' + height);
                        console.log('control ' + control);
                        console.log('full ' + full);
                        console.log('margin_left ' + margin_left);
                        console.log('margin_top ' + margin_top);
                        console.log('*****************************');*/
                        
                        if (full) {
                            $(scope).addClass('fullgaz');
                            var the_elmt = $(scope).find('.framebox .content-frame').children().eq(0);
                            var diff_width = $(the_elmt).outerWidth() - width;
                            var diff_height = $(the_elmt).outerHeight() - height;
							var attr_width = $(the_elmt).attr('width');
							var attr_height = $(the_elmt).attr('height');
							if (typeof attr_width != 'undefined' && attr_width != '' && attr_width != null && parseInt(attr_width) > 0 &&
								typeof attr_height != 'undefined' && attr_height != '' && attr_height != null && parseInt(attr_height) > 0) {
								if (diff_width > 0) {
									var percent_prop = parseInt((width * 100) / attr_width);
									height = parseInt((percent_prop * attr_height) / 100);
									margin_top = Math.ceil(parseInt(height) / 2);
									$(the_elmt).css('height', height + 'px').css('width', width + 'px');
									window.setTimeout(function() {
										$(scope).fabox('resize', {width: 0, height: 0, control: control, full: true, show: false, full_text: full_text, mode_closebox: mode_closebox});
									}, 300);
								}
								else if(diff_height > 0) {
									var percent_prop = parseInt((height * 100) / attr_height);
									width = parseInt((percent_prop * attr_width) / 100);
									margin_left = Math.ceil(parseInt(width) / 2);
									$(the_elmt).css('height', height + 'px').css('width', width + 'px');						
									window.setTimeout(function() {
										$(scope).fabox('resize', {width: 0, height: 0, control: control, full: true, show: false, full_text: full_text, mode_closebox: mode_closebox});
									}, 300);
								}
								else {
									window.setTimeout(function() {
										$(scope).fabox('resize', {width: 0, height: 0, control: control, full: false, show: true, full_text: full_text, mode_closebox: mode_closebox});
									}, 300);
								}
							}
							else {
								if (diff_height > 0 || diff_width > 0) {
									if (diff_height > diff_width) {
										$(the_elmt).css('height', height + 'px').css('width', 'auto');
									}
									else {
										$(the_elmt).css('width', width + 'px').css('height', 'auto');
									}
									window.setTimeout(function() {
										$(scope).fabox('resize', {width: 0, height: 0, control: control, full: true, show: false, full_text: full_text, mode_closebox: mode_closebox});
									}, 300);
								}
								else {
									window.setTimeout(function() {
										$(scope).fabox('resize', {width: 0, height: 0, control: control, full: false, show: true, full_text: full_text, mode_closebox: mode_closebox});
									}, 300);
								}
							}							
                        }
                        if (!control) {
                            $(scope).addClass('no-control');
                        }
                        if (show) {
	                        switch(mode_closebox) {
		                        case 'full':
		                        	// Mode fullpage, la closebox se situe en haut à droite de l'écran
		                        	$(scope).find('.close-box').css('right', '20px').css('top', '20px');
		                        break;
		                        case 'center':
		                        	// Mode center, la closebox se situe en haut à droite de la framebox
		                        	var right_position = parseInt(parseInt(width_screen / 2) - margin_left);
		                        	var top_position = parseInt(parseInt(height_screen / 2) - margin_top);
		                        	$(scope).find('.close-box').css('right', right_position + 'px').css('top', top_position + 'px');
		                        break;
	                        }
                            $(scope).removeClass('loading');
                            $(scope).find('.framebox').stop().animate({'margin-left': '-' + margin_left + 'px',
                                                                                        'width': width + 'px',
                                                                                        'margin-top': '-' + margin_top + 'px',
                                                                                        'height': height + 'px'}, 200);
                        }
                        else {
                            $(scope).find('.framebox').css('width', width + 'px').css('height', height + 'px').css('margin-left', '-' + margin_left + 'px').css('margin-top', '-' + margin_top + 'px');
                            window.setTimeout(function() {
	                            if (!full) {
                                    if(!full_text) {
                                        width = 0;
                                    }
                                    else {
                                        $(scope).find('.content-frame').addClass('force-relative');
                                    }
	                                $(scope).fabox('resize', {width: width, height: 0, control: control, full: false, show: true, full_text: full_text, mode_closebox: mode_closebox});
	                            }
                            }, 0);
                        }
                    break;
                }
            }
            return this;
        }
    });
})(jQuery);
