
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
.

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
'
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


c
l
a
s
s
 
j
0
0
0
6
0
t
o
p
t
e
m
p
l
a
t
e

{

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
$
c
o
m
p
o
n
e
n
t
A
r
g
s
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
.
 
M
i
n
i
c
o
m
p
o
n
e
n
t
s
 
w
i
t
h
 
t
e
m
p
l
a
t
e
s
 
t
h
a
t
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

 
 
 
 
 
 
 
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
m
c
H
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
a
b
l
e
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
g
e
t
_
s
h
o
w
t
i
m
e
(
'
t
o
p
o
f
f
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}

	
	

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 

	
	
$
s
i
t
e
C
o
n
f
i
g
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
c
o
n
f
i
g
_
s
i
t
e
_
s
i
n
g
l
e
t
o
n
'
)
;

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;

 
 
 
 
 
 
 
 

	
	
$
t
h
i
s
J
R
U
s
e
r
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
r
_
u
s
e
r
'
)
;

 
 
 
 
 
 
 
 

	
	
$
m
a
n
a
g
e
m
e
n
t
_
v
i
e
w
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
t
m
p
l
'
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
p
o
p
u
p
 
=
 
i
n
t
v
a
l
(
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
p
o
p
u
p
'
,
 
0
)
)
;

 
 
 
 
 
 
 
 
/
/
$
t
z
 
 
 
 
 
 
 
 
 
	
 
 
 
	
=
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
t
z
'
 
]
;

 
 
 
 
 
 
 
 

	
	
$
j
o
m
r
e
s
l
a
n
g
 
	
	
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
 
'
j
o
m
r
e
s
_
l
a
n
g
u
a
g
e
'
 
)
;

	
	

	
	
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
 
	
=
 
g
e
t
D
e
f
a
u
l
t
P
r
o
p
e
r
t
y
(
)
;


 
 
 
 
 
 
 
 
i
f
 
(
A
J
A
X
C
A
L
L
 
|
|
 
$
p
o
p
u
p
 
=
=
 
1
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


	
	
$
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;


	
	
$
o
u
t
p
u
t
[
 
'
V
I
D
E
O
_
T
U
T
O
R
I
A
L
S
'
 
]
 
=
 
'
'
;

	
	
i
f
 
(
u
s
i
n
g
_
b
o
o
t
s
t
r
a
p
(
)
)
 
{

	
	
	
$
j
o
m
r
e
s
_
v
i
d
e
o
_
t
u
t
o
r
i
a
l
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
v
i
d
e
o
_
t
u
t
o
r
i
a
l
s
'
)
;

	
	
	
$
j
o
m
r
e
s
_
v
i
d
e
o
_
t
u
t
o
r
i
a
l
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
;

	
	
	
$
o
u
t
p
u
t
[
 
'
V
I
D
E
O
_
T
U
T
O
R
I
A
L
S
'
 
]
 
=
 
$
j
o
m
r
e
s
_
v
i
d
e
o
_
t
u
t
o
r
i
a
l
s
-
>
b
u
i
l
d
_
m
o
d
a
l
(
)
;

	
	
}


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
P
R
O
P
E
R
T
Y
N
A
M
E
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
A
C
T
I
V
E
_
P
R
O
P
E
R
T
Y
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
M
A
N
A
G
E
M
E
N
T
_
V
I
E
W
_
D
R
O
P
D
O
W
N
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
E
D
I
T
I
N
G
_
M
O
D
E
_
D
R
O
P
D
O
W
N
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
T
I
M
E
Z
O
N
E
_
D
R
O
P
D
O
W
N
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
T
I
M
E
Z
O
N
E
B
L
U
R
B
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
P
R
O
P
E
R
T
Y
_
S
E
L
E
C
T
O
R
_
D
R
O
P
D
O
W
N
'
 
]
 
=
 
'
'
;

	
	
$
o
u
t
p
u
t
[
 
'
W
I
D
G
E
T
S
_
S
E
L
E
C
T
O
R
_
D
R
O
P
D
O
W
N
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
C
U
R
R
E
N
T
_
P
R
O
P
E
R
T
Y
_
S
T
Y
L
E
'
 
]
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
F
B
_
L
O
C
A
L
I
S
E
'
]
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
-
'
,
 
'
_
'
,
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
l
a
n
g
'
)
)
;


 
 
 
 
 
 
 
 
$
e
d
i
t
i
n
g
_
m
o
d
e
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
e
d
i
t
i
n
g
_
m
o
d
e
'
)
;

 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
$
e
d
i
t
i
n
g
_
m
o
d
e
-
>
m
a
k
e
_
e
d
i
t
i
n
g
_
m
o
d
e
_
d
r
o
p
d
o
w
n
(
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
u
l
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
e
d
i
t
i
n
g
_
d
r
o
p
d
o
w
n
[
 
]
[
 
'
E
D
I
T
I
N
G
_
M
O
D
E
_
D
R
O
P
D
O
W
N
'
 
]
 
=
 
$
r
e
s
u
l
t
;

 
 
 
 
 
 
 
 
 
 
 
 
s
e
t
_
s
h
o
w
t
i
m
e
(
'
m
e
n
u
i
t
e
m
_
e
d
i
t
i
n
g
_
m
o
d
e
_
d
r
o
p
d
o
w
n
'
,
 
$
e
d
i
t
i
n
g
_
d
r
o
p
d
o
w
n
[
 
0
 
]
[
 
'
E
D
I
T
I
N
G
_
M
O
D
E
_
D
R
O
P
D
O
W
N
'
 
]
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
t
h
i
s
_
c
m
s
_
i
s
_
j
o
o
m
l
a
(
)
 
|
|
 
t
h
i
s
_
c
m
s
_
i
s
_
w
o
r
d
p
r
e
s
s
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
H
A
C
T
I
V
E
_
P
R
O
P
E
R
T
Y
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
H
S
T
A
T
U
S
_
C
U
R
R
E
N
T
'
,
 
'
_
J
O
M
R
E
S
_
H
S
T
A
T
U
S
_
C
U
R
R
E
N
T
'
)
.
'
:
 
'
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
e
t
_
s
h
o
w
t
i
m
e
(
'
m
e
n
u
i
t
e
m
_
p
r
o
p
e
r
t
y
n
a
m
e
'
,
 
$
o
u
t
p
u
t
[
 
'
P
R
O
P
E
R
T
Y
N
A
M
E
'
 
]
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
j
r
_
i
m
p
o
r
t
(
'
j
o
m
r
e
s
_
m
a
n
a
g
e
m
e
n
t
_
v
i
e
w
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
m
a
n
a
g
e
m
e
n
t
_
v
i
e
w
 
=
 
n
e
w
 
j
o
m
r
e
s
_
m
a
n
a
g
e
m
e
n
t
_
v
i
e
w
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
n
a
g
e
m
e
n
t
_
d
r
o
p
d
o
w
n
 
=
 
$
j
o
m
r
e
s
_
m
a
n
a
g
e
m
e
n
t
_
v
i
e
w
-
>
g
e
t
_
d
r
o
p
d
o
w
n
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
M
A
N
A
G
E
M
E
N
T
_
V
I
E
W
_
D
R
O
P
D
O
W
N
'
 
]
 
=
 
$
m
a
n
a
g
e
m
e
n
t
_
d
r
o
p
d
o
w
n
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
e
t
_
s
h
o
w
t
i
m
e
(
'
m
e
n
u
i
t
e
m
_
m
a
n
a
g
e
m
e
n
t
_
v
i
e
w
_
d
r
o
p
d
o
w
n
'
,
 
$
o
u
t
p
u
t
[
 
'
M
A
N
A
G
E
M
E
N
T
_
V
I
E
W
_
D
R
O
P
D
O
W
N
'
 
]
)
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
*
 
T
i
m
e
z
o
n
e
 
f
e
a
t
u
r
e
 
d
i
s
a
b
l
e
d

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
 
$
j
r
C
o
n
f
i
g
[
 
'
u
s
e
_
t
i
m
e
z
o
n
e
_
s
w
i
t
c
h
e
r
'
 
]
 
=
=
 
"
1
"
 
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
i
m
e
z
o
n
e
_
d
r
o
p
d
o
w
n
[
 
0
 
]
[
 
'
T
I
M
E
Z
O
N
E
_
D
R
O
P
D
O
W
N
'
 
]
 
=
 
$
t
z
-
>
g
e
t
_
d
r
o
p
d
o
w
n
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
a
t
e
 
=
 
n
e
w
 
D
a
t
e
T
i
m
e
(
 
n
u
l
l
,
 
n
e
w
 
D
a
t
e
T
i
m
e
Z
o
n
e
(
 
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
s
_
t
i
m
e
z
o
n
e
 
)
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
i
m
e
z
o
n
e
_
d
r
o
p
d
o
w
n
[
 
0
 
]
[
 
'
T
I
M
E
Z
O
N
E
B
L
U
R
B
'
 
]
 
=
 
o
u
t
p
u
t
D
a
t
e
(
 
d
a
t
e
_
f
o
r
m
a
t
(
 
$
d
a
t
e
,
 
"
Y
/
m
/
d
"
 
)
 
)
 
.
 
"
 
"
 
.
 
d
a
t
e
_
f
o
r
m
a
t
(
 
$
d
a
t
e
,
 
"
H
:
i
:
s
"
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
e
t
_
s
h
o
w
t
i
m
e
(
 
"
m
e
n
u
i
t
e
m
_
t
i
m
e
z
o
n
e
_
d
r
o
p
d
o
w
n
"
,
 
$
t
i
m
e
z
o
n
e
_
d
r
o
p
d
o
w
n
[
 
0
 
]
[
 
'
T
I
M
E
Z
O
N
E
_
D
R
O
P
D
O
W
N
'
 
]
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
e
t
_
s
h
o
w
t
i
m
e
(
 
"
m
e
n
u
i
t
e
m
_
t
i
m
e
z
o
n
e
b
l
u
r
b
"
,
 
$
t
i
m
e
z
o
n
e
_
d
r
o
p
d
o
w
n
[
 
0
 
]
[
 
'
T
I
M
E
Z
O
N
E
B
L
U
R
B
'
 
]
 
)
;
*
/

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
u
s
i
n
g
_
b
o
o
t
s
t
r
a
p
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
.
'
l
o
g
o
.
p
n
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
L
O
G
O
_
R
E
L
A
T
I
V
E
_
U
R
L
'
 
]
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
R
E
L
P
A
T
H
.
'
/
l
o
g
o
.
p
n
g
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
A
B
S
P
A
T
H
.
'
l
o
g
o
.
j
p
g
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
L
O
G
O
_
R
E
L
A
T
I
V
E
_
U
R
L
'
 
]
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
L
O
C
A
T
I
O
N
_
R
E
L
P
A
T
H
.
'
/
l
o
g
o
.
j
p
g
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
L
O
G
O
_
R
E
L
A
T
I
V
E
_
U
R
L
'
 
]
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
S
_
R
E
L
P
A
T
H
.
'
l
o
g
o
.
p
n
g
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
L
O
G
O
_
R
E
L
A
T
I
V
E
_
U
R
L
'
 
]
 
=
 
J
O
M
R
E
S
_
I
M
A
G
E
S
_
R
E
L
P
A
T
H
.
'
j
r
l
o
g
o
.
p
n
g
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
S
A
N
I
T
Y
_
C
H
E
C
K
S
'
 
]
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
s
a
n
i
t
y
_
c
h
e
c
k
_
w
a
r
n
i
n
g
s
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
N
E
X
T
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
P
N
_
N
E
X
T
'
,
 
'
_
P
N
_
N
E
X
T
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
P
R
E
V
I
O
U
S
'
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
P
N
_
P
R
E
V
I
O
U
S
'
,
 
'
_
P
N
_
P
R
E
V
I
O
U
S
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
B
A
C
K
L
I
N
K
'
 
]
 
=
 
'
<
a
 
h
r
e
f
=
"
j
a
v
a
s
c
r
i
p
t
:
h
i
s
t
o
r
y
.
g
o
(
-
1
)
"
>
'
.
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
B
A
C
K
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
B
A
C
K
'
)
.
'
<
/
a
>
'
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
L
I
V
E
S
I
T
E
'
 
]
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
l
i
v
e
_
s
i
t
e
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
D
A
T
E
P
I
C
K
E
R
L
A
N
G
'
 
]
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
d
a
t
e
p
i
c
k
e
r
_
l
a
n
g
'
)
;

	
	
$
o
u
t
p
u
t
[
 
'
P
R
O
P
E
R
T
Y
_
U
I
D
'
 
]
 
=
 
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
;


 
 
 
 
 
 
 
 
$
l
a
n
g
_
d
r
o
p
d
o
w
n
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
j
r
C
o
n
f
i
g
[
 
'
s
h
o
w
L
a
n
g
D
r
o
p
d
o
w
n
'
 
]
 
=
=
 
'
1
'
)

 
 
 
 
 
 
 
 
 
 
 
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
l
a
n
g
_
d
r
o
p
d
o
w
n
[
 
]
[
 
'
L
A
N
G
D
R
O
P
D
O
W
N
'
 
]
 
=
 
$
j
o
m
r
e
s
l
a
n
g
-
>
g
e
t
_
l
a
n
g
u
a
g
e
s
e
l
e
c
t
i
o
n
_
d
r
o
p
d
o
w
n
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
s
e
t
_
s
h
o
w
t
i
m
e
(
 
"
m
e
n
u
i
t
e
m
_
l
a
n
g
d
r
o
p
d
o
w
n
"
,
 
$
l
a
n
g
_
d
r
o
p
d
o
w
n
[
 
0
 
]
[
 
'
L
A
N
G
D
R
O
P
D
O
W
N
'
 
]
 
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
g
e
t
_
s
h
o
w
t
i
m
e
(
'
h
e
a
v
y
w
e
i
g
h
t
_
s
y
s
t
e
m
'
)
 
&
&
 
$
m
a
n
a
g
e
m
e
n
t
_
v
i
e
w
 
&
&
 
u
s
i
n
g
_
b
o
o
t
s
t
r
a
p
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
j
r
_
i
m
p
o
r
t
(
'
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
s
e
l
e
c
t
o
r
_
d
r
o
p
d
o
w
n
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
s
e
l
e
c
t
o
r
_
d
r
o
p
d
o
w
n
 
=
 
n
e
w
 
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
s
e
l
e
c
t
o
r
_
d
r
o
p
d
o
w
n
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
P
R
O
P
E
R
T
Y
_
S
E
L
E
C
T
O
R
_
D
R
O
P
D
O
W
N
'
]
 
=
 
$
j
o
m
r
e
s
_
p
r
o
p
e
r
t
y
_
s
e
l
e
c
t
o
r
_
d
r
o
p
d
o
w
n
-
>
g
e
t
_
d
r
o
p
d
o
w
n
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
e
t
_
s
h
o
w
t
i
m
e
(
'
p
r
o
p
e
r
t
y
_
s
e
l
e
c
t
o
r
_
d
r
o
p
d
o
w
n
'
,
 
$
o
u
t
p
u
t
[
'
P
R
O
P
E
R
T
Y
_
S
E
L
E
C
T
O
R
_
D
R
O
P
D
O
W
N
'
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
b
a
s
i
c
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
g
a
t
h
e
r
_
d
a
t
a
(
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
P
R
O
P
E
R
T
Y
N
A
M
E
'
 
]
 
=
 
$
c
u
r
r
e
n
t
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
p
r
o
p
e
r
t
y
_
n
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
C
U
R
R
E
N
T
_
P
R
O
P
E
R
T
Y
_
S
T
Y
L
E
'
 
]
 
=
 
'
d
i
s
p
l
a
y
:
n
o
n
e
;
'
;

 
 
 
 
 
 
 
 
}

	
	

	
	
/
/
w
i
d
g
e
t
s
 
s
e
l
e
c
t
i
o
n
 
d
r
o
p
d
o
w
n

	
	
$
w
i
d
g
e
t
s
_
d
r
o
p
d
o
w
n
 
=
 
a
r
r
a
y
(
)
;

	
	
i
f
 
(

	
	
	
$
t
h
i
s
J
R
U
s
e
r
-
>
u
s
e
r
I
s
M
a
n
a
g
e
r
 
&
&
 

	
	
	
!
i
s
s
e
t
(
$
_
R
E
Q
U
E
S
T
[
'
c
a
l
l
e
d
B
y
M
o
d
u
l
e
'
]
)
 
&
&
 

	
	
	
	
(

	
	
	
	
g
e
t
_
s
h
o
w
t
i
m
e
(
'
t
a
s
k
'
)
 
=
=
 
'
c
p
a
n
e
l
'
 
|
|
 

	
	
	
	
g
e
t
_
s
h
o
w
t
i
m
e
(
'
t
a
s
k
'
)
 
=
=
 
'
'

	
	
	
	
)
 

	
	
	
)
 
{

	
	
	
$
j
o
m
r
e
s
_
w
i
d
g
e
t
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
g
e
t
I
n
s
t
a
n
c
e
(
'
j
o
m
r
e
s
_
w
i
d
g
e
t
s
'
)
;

	
	
	

	
	
	
$
w
i
d
g
e
t
s
_
d
r
o
p
d
o
w
n
[
]
[
'
W
I
D
G
E
T
S
_
D
R
O
P
D
O
W
N
'
]
 
=
 
$
j
o
m
r
e
s
_
w
i
d
g
e
t
s
-
>
g
e
t
_
w
i
d
g
e
t
s
_
d
r
o
p
d
o
w
n
(
)
;

	
	
}


 
 
 
 
 
 
 
 
i
f
 
(
u
s
i
n
g
_
b
o
o
t
s
t
r
a
p
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
U
S
I
N
G
_
B
O
O
T
S
T
R
A
P
'
 
]
 
=
 
'
t
r
u
e
'
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
U
S
I
N
G
_
B
O
O
T
S
T
R
A
P
'
 
]
 
=
 
'
f
a
l
s
e
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
[
 
]
 
=
 
$
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
F
R
O
N
T
E
N
D
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
m
a
n
a
g
e
m
e
n
t
_
v
i
e
w
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
m
a
n
a
g
e
m
e
n
t
_
t
o
p
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
t
o
p
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;

 
 
 
 
 
 
 
 
/
/
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
 
'
t
i
m
e
z
o
n
e
_
d
r
o
p
d
o
w
n
'
,
 
$
t
i
m
e
z
o
n
e
_
d
r
o
p
d
o
w
n
 
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
 
'
l
a
n
g
_
d
r
o
p
d
o
w
n
'
,
 
$
l
a
n
g
_
d
r
o
p
d
o
w
n
 
)
;

	
	
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
 
'
w
i
d
g
e
t
s
_
d
r
o
p
d
o
w
n
'
,
 
$
w
i
d
g
e
t
s
_
d
r
o
p
d
o
w
n
 
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
r
e
s
u
l
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
e
d
i
t
i
n
g
_
d
r
o
p
d
o
w
n
'
,
 
$
e
d
i
t
i
n
g
_
d
r
o
p
d
o
w
n
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
d
i
s
p
l
a
y
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
t
o
u
c
h
_
t
e
m
p
l
a
t
e
_
l
a
n
g
u
a
g
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
P
N
_
N
E
X
T
'
,
 
'
_
P
N
_
N
E
X
T
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
P
N
_
P
R
E
V
I
O
U
S
'
,
 
'
_
P
N
_
P
R
E
V
I
O
U
S
'
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
]
 
=
 
j
r
_
g
e
t
t
e
x
t
(
'
_
J
O
M
R
E
S
_
C
O
N
V
E
R
S
I
O
N
_
D
I
S
C
L
A
I
M
E
R
'
,
 
'
_
J
O
M
R
E
S
_
C
O
N
V
E
R
S
I
O
N
_
D
I
S
C
L
A
I
M
E
R
'
)
;


 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
o
u
t
p
u
t
 
a
s
 
$
o
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
o
;

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
E
v
e
n
t
/
M
i
n
i
-
c
o
m
p
o
n
e
n
t

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
R
e
t
V
a
l
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
n
u
l
l
;

 
 
 
 
}

}

