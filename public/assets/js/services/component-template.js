define([], function () {
    var componentTemplate = (function () {
        var url = '/component-template.json';
        var config = {
            "page":{
                "id":{
                    "label":"ID",
                    "type":"textbox"
                },
                "title":{
                    "label":"Text",
                    "type":"textbox",
                    "value":"Page Name"
                }
            },
            "label":{
                "id":{
                    "label":"ID",
                    "type":"textbox"
                },
                "text":{
                    "label":"Text",
                    "type":"textarea",
                    "value":"Label Text"
                }
            },
            "textbox":{
                "id":{
                    "label":"ID",
                    "type":"textbox"
                },
                "label":{
                    "label":"Label",
                    "type":"textbox",
                    "value":"Textbox Label"
                },
                "name":{
                    "label":"Name",
                    "type":"textbox"
                },
                "value":{
                    "label":"Value",
                    "type":"textbox"
                },
                "minLength":{
                    "label":"Min Length",
                    "type":"numberbox",
                    "value":0
                },
                "maxLength":{
                    "label":"Max Length",
                    "type":"numberbox",
                    "value":255
                }
            },
            "numberbox":{
                "id":{
                    "label":"ID",
                    "type":"textbox"
                },
                "label":{
                    "label":"Label",
                    "type":"textbox",
                    "value":"Numberbox Label"
                },
                "name":{
                    "label":"Name",
                    "type":"textbox"
                },
                "value":{
                    "label":"Value",
                    "type":"textbox"
                },
                "minLength":{
                    "label":"Min Length",
                    "type":"numberbox",
                    "value":0
                },
                "maxLength":{
                    "label":"Max Length",
                    "type":"numberbox",
                    "value":255
                }
            },
            "emailbox":{
                "id":{
                    "label":"ID",
                    "type":"textbox"
                },
                "label":{
                    "label":"Label",
                    "type":"textbox",
                    "value":"Emailbox Label"
                },
                "name":{
                    "label":"Name",
                    "type":"textbox"
                },
                "value":{
                    "label":"Value",
                    "type":"textbox"
                },
                "minLength":{
                    "label":"Min Length",
                    "type":"numberbox",
                    "value":0
                },
                "maxLength":{
                    "label":"Max Length",
                    "type":"numberbox",
                    "value":255
                }
            },
            "passwordbox":{
                "id":{
                    "label":"ID",
                    "type":"textbox"
                },
                "label":{
                    "label":"Label",
                    "type":"textbox",
                    "value":"Passwordbox Label"
                },
                "name":{
                    "label":"Name",
                    "type":"textbox"
                },
                "value":{
                    "label":"Value",
                    "type":"textbox"
                },
                "minLength":{
                    "label":"Min Length",
                    "type":"numberbox",
                    "value":0
                },
                "maxLength":{
                    "label":"Max Length",
                    "type":"numberbox",
                    "value":255
                }
            },
            "button":{
                "id":{
                    "label":"ID",
                    "type":"textbox"
                },
                "text":{
                    "label":"Text",
                    "type":"textbox",
                    "value":"Button"
                }
            },
            "col":{
                "md":{
                    "label":"Choose col-md",
                    "type":"md",
                    "value":4
                }
            }
        };

        return {
            url: url,
            config: config,
        }
    })();

    return componentTemplate;
});