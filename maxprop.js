function maxProp(arr, propertyToCompare, findMax = true) {
    if (!Array.isArray(arr) || arr.length === 0) {
        return null;
    }

    let comparator = (a, b) => a < b;  // Domyślnie szukamy największej wartości

    if (!findMax) {
        comparator = (a, b) => a > b;  // Jeśli szukamy najmniejszej wartości
    }

    let maxPropertyValue = arr[0][propertyToCompare];
    let maxPropertyObject = arr[0];

    for (let i = 1; i < arr.length; i++) {
        const currentValue = arr[i][propertyToCompare];

        if (comparator(currentValue, maxPropertyValue)) {
            maxPropertyValue = currentValue;
            maxPropertyObject = arr[i];
        }
    }

    return maxPropertyObject;
}

