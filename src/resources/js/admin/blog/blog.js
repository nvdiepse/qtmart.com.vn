window.previewImageBroduct = (event) => {
    console.log(event.files);
    const [file] = event.files;
    if (file) {
        productImage.src = URL.createObjectURL(file);
    }
};
