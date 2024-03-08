Suppose we are building an electronic device management system that can be turned on and off, but not all devices have the same capabilities. Some devices may also have additional functions, such as adjusting brightness or volume. We want to apply the ISP principle to ensure that clients are not forced to depend on methods they do not use.

1.  **Device.php:** Define the `Device` interface that contains the common methods for turning a device on and off.


```  
interface Device {     
    public function turnOn();
    public function turnOff(); 
} 
```

2.  **Light.php:** Implement the `Light` class, which represents a bulb. Bulbs can only be turned on and off.


```  
class Light implements Device {
    public function turnOn() {
        echo "Light is turned on\n";
    }

    public function turnOff() {
        echo "Light is turned off\n";
    }
}
```

3.  **Television.php:** Implement the `Television` class, which represents a television. Televisions can be turned on, off, and have volume adjusted.

```  
class Television implements Device {
    public function turnOn() {
        echo "Television is turned on\n";
    }

    public function turnOff() {
        echo "Television is turned off\n";
    }

    public function adjustVolume($level) {
        echo "Volume adjusted to level $level\n";
    }
}
```

4.  **index.php:** Use the `Light` and `Television` classes to demonstrate device functionality.


```  
// Turn on and off a light bulb
$light = new Light();
$light->turnOn(); // Output: Light is turned on
$light->turnOff(); // Output: Light is turned off

// Turn on, off, and adjust volume of a television
$tv = new Television();
$tv->turnOn(); // Output: Television is turned on
$tv->turnOff(); // Output: Television is turned off
$tv->adjustVolume(10); // Output: Volume adjusted to level 10
```

This example demonstrates how to apply the Interface Segregation Principle when designing an electronic device management system. Interfaces are designed so that clients (such as applications controlling the devices) only depend on the methods they really need, improving code cohesion and reuse.
