/**
 * Internationalization: thai language
 *
 * Depends on jWYSIWYG, $.wysiwyg.i18n

 */
(function ($) {
	if (undefined === $.wysiwyg) {
		throw "lang.th.js depends on $.wysiwyg";
	}
	if (undefined === $.wysiwyg.i18n) {
		throw "lang.th.js depends on $.wysiwyg.i18n";
	}

	$.wysiwyg.i18n.lang.th = {
		controls: {
			"Bold": "ตัวหนา",
			"Colorpicker": "ตัวเลือกสี",
			"Copy": "สำเนา",
			"Create link": "สร้างการเชื่อมโยง",
			"Cut": "ตัด",
			"Decrease font size": "ลดขนาดตัวอักษร",
			"Fullscreen": "ขนาดเต็มจอ",
			"Header 1": "ส่่วนหัว 1",
			"Header 2": "ส่วนหัว 2",
			"Header 3": "ส่วนหัว 3",
			"View source code": "View source code",
			"Increase font size": "เพิ่มขนาดตัวอักษร",
			"Indent": "ย่อหน้า",
			"Insert Horizontal Rule": "แทรกตามแนวนอน",
			"Insert image": "แทรกรูปภาพ",
			"Insert Ordered List": "แทรกคำสั่งเข้าไปในรลำดับ",
			"Insert table": "แทรก/แก้ไข ตาราง",
			"Insert Unordered List": "แทรกรายการเรียงลำดับ",
			"Italic": "ตัวเอียง",
			"Justify Center": "ปรับให้อยู่ตรงกลาง",
			"Justify Full": "ปรับให้เต็ม",
			"Justify Left": "ปรับไปทางซ้าย",
			"Justify Right": "ปรับไปทางขวา",
			"Left to Right": "จากซ้ายไปขวา",
			"Outdent": "ข้างๆ",
			"Paste": "วาง",
			"Redo": "ทำใหม่",
			"Remove formatting": "ลบรูปแบบ",
			"Right to Left": "จากขวาไปซ้าย",
			"Strike-through": "ขีดเส้น-กลางตัวอักษร",
			"Subscript": "ตัวห้อย",
			"Superscript": "ตัวยก",
			"Underline": "ตัวขีดเส้นใต้",
			"Undo": "ยกเลิกคำสั่ง",
		},

		dialogs: {
			// for all
			"Apply": "สมัคร",
			"Cancel": "ยกเลิก",

			colorpicker: {
				"Colorpicker": "ตัวเลือกสี",
				"Color": "สี"
			},

			fileManager: {
				"file_manager": "จัดการไฟล์",
				"upload_title": "อับโหลดหัวข้อ",
				"rename_title": "แก้ไขหัวข้อ",
				"remove_title": "เอาหัวข้อออก",
				"mkdir_title": "mkdir_title",
				"upload_action": "upload_action",
				"mkdir_action": "mkdir_action",
				"remove_action": "เอาออก",
				"rename_action": "ทำการแก้ไขชื่อ",
				"delete_message": "ลบข้อความ",
				"new_directory": "new_directory",
				"previous_directory": "previous_directory",
				"rename": "เปลี่ยนชื่อ",
				"select": "เลือก",
				"create": "สร้างใหม่",
				"submit": "ส่ง",
				"cancel": "ยกเลิก",
				"yes": "ใช่",
				"no": "ไม่"
			},

			image: {
				"Insert Image": "แทรกรูปภาพ",
				"Preview": "ดูตัวอย่าง",
				"URL": "URL",
				"Title": "หัวข้อ",
				"Description": "คำอธิบาย",
				"Width": "กว้าง",
				"Height": "สูง",
				"Original W x H": "ต้นฉบับ W x H",
				"Float": "ตัวลอย",
				"None": "ไม่มี",
				"Left": "ซ้าย",
				"Right": "ขวา",
				"Select file from server": "เลือกไฟล์จากเซิฟเวอร์"
			},

			link: {
				"Insert Link": "แทรกการเชื่อมโยง",
				"Link URL": "เชื่อมโยงไปยัง URL",
				"Link Title": "เชื่อมโยงไปยัง หัวข้อ",
				"Link Target": "เชื่อมโยงไปยัง เป้าหมาย"
			},

			table: {
				"Insert table": "แทรก/แก้ไข ตาราง",
				"Count of columns": "นับจากคอลัมน์",
				"Count of rows": "นับจากแถว"
			}
		}
	};
})(jomresJquery);