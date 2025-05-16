/*
Template Name: Tailwick - Admin & Dashboard Template
Author: Themesdesign
Website: https://themesdesign.in/
Contact: Themesdesign@gmail.com
File: Invoice create init Js File
*/

// price calculation
const addBtnExperience = document.querySelector('#addBtnExperience');
const addBtnFormation = document.querySelector('#addBtnFormation');
const addBtnComptence = document.querySelector('#addBtnComptence');
const addBtnLangue = document.querySelector('#addBtnLangue');
addBtnExperience.addEventListener('click', (event) => new_experience() );
addBtnFormation.addEventListener('click', (event) => new_formation() );
addBtnComptence.addEventListener('click', (event) => new_competence() );
addBtnLangue.addEventListener('click', (event) => new_langue() );

const customSoftSwitch = document.querySelector('#customSoftSwitch');
customSoftSwitch.addEventListener('change', (event) => {
    billingFunction()
});

// Function to get the input element from the parent hierarchy
function getDivFromTheElement(element) {
    let temp = element.parentNode.querySelector('input.item-quantity');

    if (!temp) {
        const upperParent = element.parentNode;
        return getDivFromTheElement(upperParent);
    }
    return temp;
}

var count = 2;
function new_experience() {
    var delLink =
        ` <tbody class="before:block before:h-3 item-list">
            <tr class="item">
                <td class="border border-slate-200 dark:border-zink-500">
                    <input type="text" id="job_title" name="job_title[]"
                        class="px-3.5 py-2.5 border-none form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="Nom de l'emploi" required>
                </td>
                <td class="w-40 border border-slate-200 dark:border-zink-500">
                        <input type="date" id="startexperience" name="start_date[]"
                        class="px-3.5 py-2.5 border-none form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                        placeholder="Nom de l'emploi" required>
                </td>
                <td class="w-40 border border-slate-200 dark:border-zink-500">
                    <input type="date" id="endexperience" name="end_date[]"
                        class="px-3.5 py-2.5 border-none form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 item-price"
                        placeholder="$00.00" required>
                </td>
                <td class="w-40 border border-slate-200 dark:border-zink-500">
                    <input type="text" id="entreprise" name="company[]"
                        class="px-3.5 py-2.5 border-none form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 item-discount"
                        placeholder="Nom de l'entreprise" required>
                </td>
                <td class="w-40 border border-slate-200 dark:border-zink-500">
                    <div class="flex justify-center text-center input-step">
                        <button type="button"
                            class="px-2 py-1.5 text-xs text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20 product-removal"><i
                                data-lucide="trash-2" class="inline-block size-3 mr-1 align-middle"></i>
                            <span class="align-middle">Supprimer</span></button>
                    </div>
                </td>
            </tr>
        </tbody>`
    document.getElementById("afterExperience").insertAdjacentHTML("beforeBegin", delLink);
    count++;

    // Assuming "afterExperience" is the ID of the element you want to append to
    var genericExamples = document.querySelectorAll("[data-trigger]");
    Array.from(genericExamples).forEach(function (genericExamp) {
        var element = genericExamp;
        new Choices(element, {
            placeholderValue: "This is a placeholder set in the config",
            searchPlaceholderValue: "This is a search placeholder",
        });
    });

    // reinitialize js
    lucide.createIcons();
    remove()
}
function new_formation() {
    var delLink =
        `<tbody class="before:block before:h-3 item-list">
            <tr class="item">
                <td class="border border-slate-200 dark:border-zink-500">
                    <input type="text" id="formationtitle" name="title[]"
                        class="px-3.5 py-2.5 border-none form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                        placeholder="Nom de la formation" required>
                </td>
                <td class="w-40 border border-slate-200 dark:border-zink-500">
                        <input type="date" id="startformation" name="start_dat[]"
                        class="px-3.5 py-2.5 border-none form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                        placeholder="Nom de l'emploi" required>
                </td>
                <td class="w-40 border border-slate-200 dark:border-zink-500">
                    <input type="date" id="endformation" name="end_dat[]"
                        class="px-3.5 py-2.5 border-none form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 item-price"
                        placeholder="$00.00" required>
                </td>
                <td class="w-40 border border-slate-200 dark:border-zink-500">
                    <input type="text" id="etablissement" name="school[]"
                        class="px-3.5 py-2.5 border-none form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 item-discount"
                        placeholder="Nom de l'etablissement" required>
                </td>
                <td class="w-40 border border-slate-200 dark:border-zink-500">
                    <div class="flex justify-center text-center input-step">
                        <button type="button"
                            class="px-2 py-1.5 text-xs text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20 product-removal"><i
                                data-lucide="trash-2" class="inline-block size-3 mr-1 align-middle"></i>
                            <span class="align-middle">Supprimer</span></button>
                    </div>
                </td>
            </tr>
        </tbody>`
    document.getElementById("afterFormation").insertAdjacentHTML("beforeBegin", delLink);
    count++;

    // Assuming "afterExperience" is the ID of the element you want to append to
    var genericExamples = document.querySelectorAll("[data-trigger]");
    Array.from(genericExamples).forEach(function (genericExamp) {
        var element = genericExamp;
        new Choices(element, {
            placeholderValue: "This is a placeholder set in the config",
            searchPlaceholderValue: "This is a search placeholder",
        });
    });

    // reinitialize js
    lucide.createIcons();
    remove()
}
function new_competence() {
    var delLink =
        ` <tbody class="before:block before:h-3 item-list">
            <tr class="item">
                <td class="border border-slate-200 dark:border-zink-500">
                    <textarea
                        class="px-3.5 py-2.5 border-none form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                        placeholder="Décrivez votre compétence" id="competence" name="competence[]" rows="2"></textarea>
                </td>
                <td class="w-40 border border-slate-200 dark:border-zink-500">
                    <div class="flex justify-center text-center input-step">
                        <button type="button"
                            class="px-2 py-1.5 text-xs text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20 product-removal"><i
                                data-lucide="trash-2" class="inline-block size-3 mr-1 align-middle"></i>
                            <span class="align-middle">Supprimer</span></button>
                    </div>
                </td>
            </tr>
        </tbody>`
    document.getElementById("afterComptence").insertAdjacentHTML("beforeBegin", delLink);
    count++;

    // Assuming "afterExperience" is the ID of the element you want to append to
    var genericExamples = document.querySelectorAll("[data-trigger]");
    Array.from(genericExamples).forEach(function (genericExamp) {
        var element = genericExamp;
        new Choices(element, {
            placeholderValue: "This is a placeholder set in the config",
            searchPlaceholderValue: "This is a search placeholder",
        });
    });

    // reinitialize js
    lucide.createIcons();
    remove()
}
function new_langue() {
    var delLink =
        ` <tbody class="before:block before:h-3 item-list">
            <tr class="item">
                <td class="border border-slate-200 dark:border-zink-500">
                    <input type="text" id="langue" name="langue[]"
                        class="px-3.5 py-2.5 border-none form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 item-discount"
                        placeholder="langue" required>
                </td>
                <td class="w-40 border border-slate-200 dark:border-zink-500">
                    <div class="flex justify-center text-center input-step">
                        <button type="button"
                            class="px-2 py-1.5 text-xs text-red-500 bg-red-100 btn hover:text-white hover:bg-red-600 focus:text-white focus:bg-red-600 focus:ring focus:ring-red-100 active:text-white active:bg-red-600 active:ring active:ring-red-100 dark:bg-red-500/20 dark:text-red-500 dark:hover:bg-red-500 dark:hover:text-white dark:focus:bg-red-500 dark:focus:text-white dark:active:bg-red-500 dark:active:text-white dark:ring-red-400/20 product-removal"><i
                                data-lucide="trash-2" class="inline-block size-3 mr-1 align-middle"></i>
                            <span class="align-middle">Supprimer</span></button>
                    </div>
                </td>
            </tr>
        </tbody>`
    document.getElementById("afterLangue").insertAdjacentHTML("beforeBegin", delLink);
    count++;

    // Assuming "afterExperience" is the ID of the element you want to append to
    var genericExamples = document.querySelectorAll("[data-trigger]");
    Array.from(genericExamples).forEach(function (genericExamp) {
        var element = genericExamp;
        new Choices(element, {
            placeholderValue: "This is a placeholder set in the config",
            searchPlaceholderValue: "This is a search placeholder",
        });
    });

    // reinitialize js
    lucide.createIcons();
    remove()
}

//Lucide icons js
function remove() {
    var removeProduct = document.querySelectorAll(".item-list .product-removal")
    Array.from(removeProduct).forEach(function (el) {
        el.addEventListener("click", function (e) {
            removeItem(e);
        });
    });
}

/* Remove item from cart */
function removeItem(removeButton) {
    removeButton.target.closest("tbody").remove();
}
remove();


//Address
function billingFunction() {
    if (document.getElementById("customSoftSwitch").checked) {
        document.getElementById("fullNameBillingInput").value =
            document.getElementById("fullNameShippingInput").value;
        document.getElementById("phoneNoBillingInput").value =
            document.getElementById("phoneNoShippingInput").value;
        document.getElementById("alternativeNoBillingInput").value =
            document.getElementById("alternativeNoShippingInput").value;
        document.getElementById("taxBillingInput").value =
            document.getElementById("taxShippingInput").value;
        document.getElementById("addressBillingInput").value =
            document.getElementById("addressShippingInput").value;
    } else {
        document.getElementById("fullNameBillingInput").value = "";
        document.getElementById("phoneNoBillingInput").value = "";
        document.getElementById("alternativeNoBillingInput").value = "";
        document.getElementById("taxBillingInput").value = "";
    }
}

document.querySelector(".changeAddress").addEventListener("change", (event) => {
    billingFunction();
})