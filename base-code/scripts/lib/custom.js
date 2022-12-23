// put your custom js in the file

// Chat app code

// if (typeof jquery === undefined) {
//     alert("Jquery not installed");
// } else {
//     alert("Jquery is installed successfully");
// }

 ClassicEditor
    .create( document.querySelector( '.chat__editor' ), {
        //extraPlugins: [ Essentials, Paragraph, Mention, MentionLinks, Bold, Italic, Underline, Strikethrough, Link ],
        toolbar: {
            items: [
                'bold', 'italic', 'underline', 'strikethrough', '|', 'link', '|', 'undo', 'redo'
            ]
        },
        mention: {
            feeds: [
                {
                    marker: '@',
                    feed: [
                        { id: '@cflores', avatar: 'm_1', name: 'Charles Flores' },
                        { id: '@gjackson', avatar: 'm_2', name: 'Gerald Jackson' },
                        { id: '@wreed', avatar: 'm_3', name: 'Wayne Reed' },
                        { id: '@lgarcia', avatar: 'm_4', name: 'Louis Garcia' },
                        { id: '@rwilson', avatar: 'm_5', name: 'Roy Wilson' },
                        { id: '@mnelson', avatar: 'm_6', name: 'Matthew Nelson' },
                        { id: '@rwilliams', avatar: 'm_7', name: 'Randy Williams' },
                        { id: '@ajohnson', avatar: 'm_8', name: 'Albert Johnson' },
                        { id: '@sroberts', avatar: 'm_9', name: 'Steve Roberts' },
                        { id: '@kevans', avatar: 'm_10', name: 'Kevin Evans' },
                        { id: '@mwilson', avatar: 'w_1', name: 'Mildred Wilson' },
                        { id: '@mnelson', avatar: 'w_2', name: 'Melissa Nelson' },
                        { id: '@kallen', avatar: 'w_3', name: 'Kathleen Allen' },
                        { id: '@myoung', avatar: 'w_4', name: 'Mary Young' },
                        { id: '@arogers', avatar: 'w_5', name: 'Ashley Rogers' },
                        { id: '@dgriffin', avatar: 'w_6', name: 'Debra Griffin' },
                        { id: '@dwilliams', avatar: 'w_7', name: 'Denise Williams' },
                        { id: '@ajames', avatar: 'w_8', name: 'Amy James' },
                        { id: '@randerson', avatar: 'w_9', name: 'Ruby Anderson' },
                        { id: '@wlee', avatar: 'w_10', name: 'Wanda Lee' }
                    ],
                    itemRenderer: customItemRenderer
                },
                {
                    marker: '#',
                    feed: [
                        '#american', '#asian', '#baking', '#breakfast', '#cake', '#caribbean',
                        '#chinese', '#chocolate', '#cooking', '#dairy', '#delicious', '#delish',
                        '#dessert', '#desserts', '#dinner', '#eat', '#eating', '#eggs', '#fish',
                        '#food', '#foodgasm', '#foodie', '#foodporn', '#foods', '#french', '#fresh',
                        '#fusion', '#glutenfree', '#greek', '#grilling', '#halal', '#homemade',
                        '#hot', '#hungry', '#icecream', '#indian', '#italian', '#japanese', '#keto',
                        '#korean', '#lactosefree', '#lunch', '#meat', '#mediterranean', '#mexican',
                        '#moroccan', '#nom', '#nomnom', '#paleo', '#poultry', '#snack', '#spanish',
                        '#sugarfree', '#sweet', '#sweettooth', '#tasty', '#thai', '#vegan',
                        '#vegetarian', '#vietnamese', '#yum', '#yummy'
                    ]
                }
            ]
        }
    } )
    .then( editor => {
      console.log('editor:', editor);
        const editingView = editor.editing.view;
        const rootElement = editingView.document.getRoot();
        console.log(rootElement);
        window.editor = editor;
        

        // Clone the first message in the chat when "Send" is clicked, fill it with new data
        // and append to the chat list.
        document.querySelector( '.chat-send' ).addEventListener("click", () => {
            const message = editor.getData();
          console.log('msg:', message);
            if ( !message ) {
                editingView.change( writer => {
                    writer.addClass( 'highlighted', rootElement );
                    editingView.focus();
                } );

                setTimeout( () => {
                    editingView.change( writer => {
                        writer.removeClass( 'highlighted', rootElement );
                    } );
                }, 650 );

                return;
            }

            const clone = document.querySelector( '.chat__posts li' ).cloneNode( true );

            clone.classList.add( 'new-post' );
            clone.querySelector( 'img' ).src = 'https://ckeditor.com/docs/ckeditor5/latest/assets/img/m_0.jpg';
            clone.querySelector( 'strong' ).textContent = 'Ijomah Jacob';

            const mailtoUser = clone.querySelector( '.chat__posts__post__mailto-user' );

            mailtoUser.textContent = '@ijomahjacob';
            mailtoUser.href = 'jacobijomah.bincom@gmail.com';

            clone.querySelector( '.chat__posts__post__time' ).textContent = 'just now';
            clone.querySelector( '.chat__posts__post__content' ).innerHTML = message;

            document.querySelector( '.chat__posts' ).appendChild( clone );

            editor.setData( '' );
            editingView.focus();
        } );
    } )
    .catch( err => {
        console.error( err.stack );
    } );


/*
 * This plugin customizes the way mentions are handled in the editor model and data.
 * Instead of a classic <span class="mention"></span>,
 */
function MentionLinks( editor ) {
    // The upcast converter will convert a view
    //
    //		<a href="..." class="mention" data-mention="...">...</a>
    //
    // element to the model "mention" text attribute.
    editor.conversion.for( 'upcast' ).elementToAttribute( {
        view: {
            name: 'a',
            key: 'data-mention',
            classes: 'mention',
            attributes: {
                href: true
            }
        },
        model: {
            key: 'mention',
            value: viewItem => editor.plugins.get( 'Mention' ).toMentionAttribute( viewItem )
        },
        converterPriority: 'high'
    } );

    // Downcast the model "mention" text attribute to a view
    //
    //		<a href="..." class="mention" data-mention="...">...</a>
    //
    // element.
    editor.conversion.for( 'downcast' ).attributeToElement( {
        model: 'mention',
        view: ( modelAttributeValue, { writer } ) => {
            // Do not convert empty attributes (lack of value means no mention).
            if ( !modelAttributeValue ) {
                return;
            }

            let href;

            // User mentions are downcasted as mailto: links. Tags become normal URLs.
            if ( modelAttributeValue.id[ 0 ] === '@' ) {
                href = `mailto:${ modelAttributeValue.id.slice( 1 ) }@example.com`;
            } else {
                href = `https://example.com/social/${ modelAttributeValue.id.slice( 1 ) }`;
            }

            return writer.createAttributeElement( 'a', {
                class: 'mention',
                'data-mention': modelAttributeValue.id,
                href
            }, {
                // Make mention attribute to be wrapped by other attribute elements.
                priority: 20,
                // Prevent merging mentions together.
                id: modelAttributeValue.uid
            } );
        },
        converterPriority: 'high'
    } );
}

/*
 * Customizes the way the list of user suggestions is displayed.
 * Each user has an @id, a name and an avatar.
 */
 function customItemRenderer( item ) {
    const itemElement = document.createElement( 'span' );
    const avatar = document.createElement( 'img' );
    const userNameElement = document.createElement( 'span' );
    const fullNameElement = document.createElement( 'span' );

    itemElement.classList.add( 'mention__item' );

    avatar.src = `https://ckeditor.com/docs/ckeditor5/latest/assets/img/${ item.avatar }.jpg`;

    userNameElement.classList.add( 'mention__item__user-name' );
    userNameElement.textContent = item.id;

    fullNameElement.classList.add( 'mention__item__full-name' );
    fullNameElement.textContent = item.name;

    itemElement.appendChild( avatar );
    itemElement.appendChild( userNameElement );
    itemElement.appendChild( fullNameElement );

    return itemElement;
}   
//Chat app code ends here

// Mini chat for the right modal
// avater, Name, badge, time and content
 
//button for submission and Input element value selection
$("form").submit(function(e) {
    e.preventDefault();
    console.log("It clicked me");
    
    //cloning the the chat component
    var $clonedElement = $(".listed").clone();
    console.log($clonedElement.length);
    $clonedElement.children(".chat-avatar").attr("src", "https://ckeditor.com/docs/ckeditor5/latest/assets/img/m_0.jpg");
    $clonedElement.children("#cardy").addClass("w-75")
    $clonedElement.find(".cardy-header-name").text("Jacob Ijomah");
    $clonedElement.find(".cardy-header-badge").text("Approved");
    $clonedElement.find(".cardy-header-time").text("2 hours ago");
    var chatMsg = $(".exampleFormControlInput").val();
    
    var chatPara = $clonedElement.find(".cardy-body-para").html(chatMsg);
    
     console.log('chat paragraph:', chatPara);
     
    //Append the cloned  list element to the the unlist element
    $(".list-unstyled").append($clonedElement[0]);
    $(".exampleFormControlInput").val('');
     
    // For reply
    // if it is Reply, then adjust some settings
    // Reduce the chat card to w-75
    // To know it is reply, if the sender is not owner for a particular chat, then it is a reply

    //I can use the card-header-name class

});

//create a <p> to hold the content
//tke the content and append to it

//Rich text format jquery code starts here
// $(function () {
//     $('[data-toggle="tooltip"]').tooltip()
//   });
//   $(document).ready(function(){
//       const colorPalette = ['C0392B', 'E74C3C', 'D35400', 'E67E22', 'F39C12', 'F1C40F', '2ECC71', '27AE60',  '3498DB', '2980B9', '9B59B6', '8E44AD', '34495E', '2C3E50', '000000', '7F8C8D', '95A5A6', 'BDC3C7', 'ECf0F1', 'FFFFFF'],
//           forePalette = $('.fore-palette'),
//           backPalette = $('.back-palette'),
//           editor = $('.editor');
  
//       for (let i = 0; i < colorPalette.length; i++) {
//       forePalette.append('<a href="#" data-command="foreColor" data-value="' + '#' + colorPalette[i] + '" style="background-color:' + '#' + colorPalette[i] + ';" class="palette-item"></a>');
//       backPalette.append('<a href="#" data-command="backColor" data-value="' + '#' + colorPalette[i] + '" style="background-color:' + '#' + colorPalette[i] + ';" class="palette-item"></a>');
//     }
//     $('.toolbar a').click(function(e) {
//           e.preventDefault();
//         const command = $(this).data('command');
//         if (command === 'h1' || command === 'h2' || command === 'p') {
//         document.execCommand('formatBlock', false, command);
//       }
//       if (command === 'foreColor' || command === 'backColor') {
//           const color = $(this).data('value');
//           document.execCommand($(this).data('command'), false, color);
//               alert(color);
//       }
//           if (command === 'removeFormat') {
//         document.execCommand('removeFormat', false, command);
//       }
//       if (command === 'createlink' || command === 'insertimage') {
//         url = prompt('Enter the link here: ', 'http:\/\/');
//               console.log(command + " " + url);
//               document.execCommand($(this).data('command'), false, url);
//         // document.execCommand($(this).data('command') && 'enableObjectResizing', false, url);
//       } else document.execCommand($(this).data('command'), false, url);
//     });
//       $('.editorAria img').click(function(){
//         document.execCommand('enableObjectResizing', false);
//       });
//       $("#getHTML").click(function(){
//           const editorId = $(this).attr('get-data');
//           const html = $("#" + editorId).find('.editorAria').html();
//           alert(html);
//       });
//   });
//Rich text format ends here



//select fxn
var optionFormat = function(item) {
    if ( !item.id ) {
        return item.text;
    }

    var span = document.createElement('span');
    var template = '';

    template += '<img src="' + item.element.getAttribute('data-kt-select2-image') + '" class="rounded-circle h-20px me-2" alt="image"/>';
    template += item.text;

    span.innerHTML = template;

    return $(span);
}

// Init Select2 --- more info: https://select2.org/
$('#kt_docs_select2_floating_labels_1').select2({
    placeholder: "Social Media",
    minimumResultsForSearch: Infinity,
    templateSelection: optionFormat,
    templateResult: optionFormat
});

// Init Select2 --- more info: https://select2.org/
$('#kt_docs_select2_floating_labels_2').select2({
    placeholder: "Batesa Enterprises Ltd",
    minimumResultsForSearch: Infinity,
    templateSelection: optionFormat,
    templateResult: optionFormat
});
//Note: selectors should use jquery style selecting only

$(document).ready(function(){
    $("#kt_modal_scrollable_1").modal('show');
});

//Date and time picker
$("#kt_daterangepicker_2").daterangepicker({
    timePicker: true,
    startDate: moment().startOf("hour"),
    endDate: moment().startOf("hour").add(32, "hour"),
    locale: {
        format: "M/DD hh:mm A"
    }
});

// $('.editor1').ckeditor();
$("#exampleFormControlInput2").mouseenter(function() {
    console.log("It touched me")
})
//For Testing
// let formValue = $("#testing").submit(() => {
//     console.log("form:", formValue);
//     see();
//     console.log("see:", see);
// });

// const see = $("#fortesting").getData();
