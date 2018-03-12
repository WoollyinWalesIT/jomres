
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
6
0
0
2
e
d
i
t
_
r
e
s
o
u
r
c
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
 
t
r
u
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


 
 
 
 
 
 
 
 
$
m
r
C
o
n
f
i
g
 
=
 
g
e
t
P
r
o
p
e
r
t
y
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
s
(
)
;


 
 
 
 
 
 
 
 
$
r
o
o
m
U
i
d
 
=
 
(
i
n
t
)
 
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
r
o
o
m
U
i
d
'
,
 
0
)
;

 
 
 
 
 
 
 
 
$
c
l
o
n
e
 
=
 
(
i
n
t
)
 
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
c
l
o
n
e
'
,
 
0
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
m
a
x
_
m
a
x
_
p
e
o
p
l
e
 
=
 
1
0
0
;


 
 
 
 
 
 
 
 
$
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
b
a
s
i
c
_
r
o
o
m
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
r
o
o
m
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
a
n
c
e
l
T
e
x
t
 
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
M
_
A
_
C
A
N
C
E
L
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
A
_
C
A
N
C
E
L
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
d
e
l
e
t
e
T
e
x
t
 
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
M
_
M
R
_
R
O
O
M
_
D
E
L
E
T
E
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
R
O
O
M
_
D
E
L
E
T
E
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
s
a
v
e
T
e
x
t
 
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
M
_
M
R
_
S
A
V
E
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
S
A
V
E
'
,
 
f
a
l
s
e
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
m
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
i
n
g
l
e
R
o
o
m
P
r
o
p
e
r
t
y
'
 
]
 
=
=
 
'
0
'
)
 
{
 
/
/
M
R
P
s

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
 
 
 
 
 
 
 
 
 
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
n
a
m
e
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
n
u
m
b
e
r
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
f
l
o
o
r
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
 
 
 
 
 
 
 
 
 
 
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
x
_
p
e
o
p
l
e
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
1
0
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
i
n
g
l
e
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
 
 
 
 
=
 
0
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
t
a
g
l
i
n
e
 
 
 
 
 
	
	
	
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
d
e
s
c
r
i
p
t
i
o
n
 
 
 
 
 
 
 
 
 
 
 
=
 
'
'
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
o
o
m
U
i
d
 
>
 
0
 
&
&
 
$
b
a
s
i
c
_
r
o
o
m
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
e
t
_
r
o
o
m
(
$
r
o
o
m
U
i
d
)
)
 
{


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
 
 
 
 
 
 
 
 
 
 
 
=
 
$
b
a
s
i
c
_
r
o
o
m
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
r
o
o
m
[
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
 
 
 
 
 
 
 
 
 
 
=
 
$
b
a
s
i
c
_
r
o
o
m
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
r
o
o
m
[
'
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
n
a
m
e
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
$
b
a
s
i
c
_
r
o
o
m
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
r
o
o
m
[
'
r
o
o
m
_
n
a
m
e
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
n
u
m
b
e
r
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
$
b
a
s
i
c
_
r
o
o
m
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
r
o
o
m
[
'
r
o
o
m
_
n
u
m
b
e
r
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
f
l
o
o
r
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
$
b
a
s
i
c
_
r
o
o
m
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
r
o
o
m
[
'
r
o
o
m
_
f
l
o
o
r
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
x
_
p
e
o
p
l
e
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
$
b
a
s
i
c
_
r
o
o
m
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
r
o
o
m
[
'
m
a
x
_
p
e
o
p
l
e
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
i
n
g
l
e
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
 
 
 
 
=
 
$
b
a
s
i
c
_
r
o
o
m
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
r
o
o
m
[
'
s
i
n
g
l
e
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
t
a
g
l
i
n
e
 
 
 
 
 
	
	
	
=
 
$
b
a
s
i
c
_
r
o
o
m
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
r
o
o
m
[
'
t
a
g
l
i
n
e
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
d
e
s
c
r
i
p
t
i
o
n
 
 
 
 
 
 
 
 
 
 
 
=
 
$
b
a
s
i
c
_
r
o
o
m
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
r
o
o
m
[
'
d
e
s
c
r
i
p
t
i
o
n
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
d
r
o
p
d
o
w
n
 
w
i
t
h
 
r
o
o
m
 
t
y
p
e
s
 
a
s
s
i
g
n
e
d
 
t
o
 
t
h
i
s
 
p
r
o
p
e
r
t
y
 
t
y
p
e

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
s
s
O
p
t
i
o
n
s
 
=
 
a
r
r
a
y
(
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
-
>
t
h
i
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
r
o
o
m
_
c
l
a
s
s
e
s
 
a
s
 
$
k
e
y
 
=
>
 
$
r
o
o
m
C
l
a
s
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
n
u
l
l
(
$
r
o
o
m
C
l
a
s
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
s
s
O
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
k
e
y
,
 
$
r
o
o
m
C
l
a
s
s
[
 
'
a
b
b
v
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
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
T
Y
P
E
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
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
c
l
a
s
s
O
p
t
i
o
n
s
,
 
'
r
o
o
m
C
l
a
s
s
e
s
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
)
;


 
 
 
 
 
 
 
 
 
 
 
 
/
/
r
o
o
m
 
f
e
a
t
u
r
e
s
 
T
O
D
O
:
 
b
u
i
l
d
 
a
 
c
l
a
s
s
 
f
o
r
 
r
o
o
m
 
f
e
a
t
u
r
e
s

 
 
 
 
 
 
 
 
 
 
 
 
$
p
t
y
p
e
_
i
d
 
=
 
$
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
-
>
p
t
y
p
e
_
i
d
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
o
o
m
U
i
d
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
F
e
a
t
u
r
e
s
A
r
r
a
y
 
=
 
e
x
p
l
o
d
e
(
'
,
'
,
 
$
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
F
e
a
t
u
r
e
s
A
r
r
a
y
 
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


 
 
 
 
 
 
 
 
 
 
 
 
$
f
e
a
t
u
r
e
L
i
s
t
T
x
t
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
,
f
e
a
t
u
r
e
_
d
e
s
c
r
i
p
t
i
o
n
,
p
t
y
p
e
_
x
r
e
f
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
r
o
o
m
_
f
e
a
t
u
r
e
s
 
W
H
E
R
E
 
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
 
'
"
.
(
i
n
t
)
 
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
.
"
'
 
O
R
 
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
 
'
0
'
 
O
R
D
E
R
 
B
Y
 
f
e
a
t
u
r
e
_
d
e
s
c
r
i
p
t
i
o
n
 
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
F
e
a
t
u
r
e
s
L
i
s
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
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
r
o
o
m
F
e
a
t
u
r
e
s
L
i
s
t
 
a
s
 
$
r
o
o
m
F
e
a
t
u
r
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
h
e
c
k
e
d
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
o
o
m
F
e
a
t
u
r
e
-
>
p
t
y
p
e
_
x
r
e
f
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
t
y
p
e
_
x
r
e
f
 
=
 
u
n
s
e
r
i
a
l
i
z
e
(
$
r
o
o
m
F
e
a
t
u
r
e
-
>
p
t
y
p
e
_
x
r
e
f
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
$
p
t
y
p
e
_
i
d
,
 
$
p
t
y
p
e
_
x
r
e
f
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
(
$
r
o
o
m
F
e
a
t
u
r
e
-
>
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
)
,
 
$
r
o
o
m
F
e
a
t
u
r
e
s
A
r
r
a
y
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
h
e
c
k
e
d
 
=
 
'
c
h
e
c
k
e
d
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
e
a
t
u
r
e
L
i
s
t
T
x
t
 
.
=
 
'
<
i
n
p
u
t
 
t
y
p
e
=
"
c
h
e
c
k
b
o
x
"
 
n
a
m
e
=
"
f
e
a
t
u
r
e
s
_
l
i
s
t
[
]
"
 
v
a
l
u
e
=
"
'
.
(
$
r
o
o
m
F
e
a
t
u
r
e
-
>
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
)
.
'
"
 
'
.
$
c
h
e
c
k
e
d
.
'
 
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
U
S
T
O
M
T
E
X
T
_
R
O
O
M
F
E
A
T
U
R
E
_
D
E
S
C
R
I
P
T
I
O
N
'
.
(
i
n
t
)
 
$
r
o
o
m
F
e
a
t
u
r
e
-
>
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
o
o
m
F
e
a
t
u
r
e
-
>
f
e
a
t
u
r
e
_
d
e
s
c
r
i
p
t
i
o
n
)
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
.
'
<
b
r
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
(
$
r
o
o
m
F
e
a
t
u
r
e
-
>
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
)
,
 
$
r
o
o
m
F
e
a
t
u
r
e
s
A
r
r
a
y
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
h
e
c
k
e
d
 
=
 
'
c
h
e
c
k
e
d
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
e
a
t
u
r
e
L
i
s
t
T
x
t
 
.
=
 
'
<
i
n
p
u
t
 
t
y
p
e
=
"
c
h
e
c
k
b
o
x
"
 
n
a
m
e
=
"
f
e
a
t
u
r
e
s
_
l
i
s
t
[
]
"
 
v
a
l
u
e
=
"
'
.
(
$
r
o
o
m
F
e
a
t
u
r
e
-
>
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
)
.
'
"
 
'
.
$
c
h
e
c
k
e
d
.
'
 
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
U
S
T
O
M
T
E
X
T
_
R
O
O
M
F
E
A
T
U
R
E
_
D
E
S
C
R
I
P
T
I
O
N
'
.
(
i
n
t
)
 
$
r
o
o
m
F
e
a
t
u
r
e
-
>
r
o
o
m
_
f
e
a
t
u
r
e
s
_
u
i
d
,
 
s
t
r
i
p
s
l
a
s
h
e
s
(
$
r
o
o
m
F
e
a
t
u
r
e
-
>
f
e
a
t
u
r
e
_
d
e
s
c
r
i
p
t
i
o
n
)
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
.
'
<
b
r
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
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
M
A
X
P
E
O
P
L
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
 
j
o
m
r
e
s
H
T
M
L
:
:
i
n
t
e
g
e
r
S
e
l
e
c
t
L
i
s
t
(
1
,
 
$
m
a
x
_
m
a
x
_
p
e
o
p
l
e
,
 
1
,
 
'
m
a
x
_
p
e
o
p
l
e
'
,
 
'
'
,
 
$
m
a
x
_
p
e
o
p
l
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
R
O
O
M
N
A
M
E
'
 
]
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
$
r
o
o
m
_
n
a
m
e
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
R
O
O
M
N
U
M
B
E
R
'
 
]
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
$
r
o
o
m
_
n
u
m
b
e
r
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
R
O
O
M
F
L
O
O
R
'
 
]
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
$
r
o
o
m
_
f
l
o
o
r
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
E
A
T
U
R
E
S
'
 
]
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
$
f
e
a
t
u
r
e
L
i
s
t
T
x
t
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
S
U
P
P
L
I
M
E
N
T
'
 
]
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
$
s
i
n
g
l
e
p
e
r
s
o
n
_
s
u
p
p
l
i
m
e
n
t
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
R
O
O
M
_
T
A
G
L
I
N
E
'
 
]
 
 
 
 
 
	
	
	
=
 
$
r
o
o
m
_
t
a
g
l
i
n
e
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
R
O
O
M
_
D
E
S
C
R
I
P
T
I
O
N
'
 
]
 
 
 
 
 
 
 
 
 
 
 
=
 
$
r
o
o
m
_
d
e
s
c
r
i
p
t
i
o
n
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
I
M
A
G
E
'
 
]
 
=
 
'
<
i
m
g
 
s
r
c
=
"
'
.
g
e
t
I
m
a
g
e
F
o
r
P
r
o
p
e
r
t
y
(
'
r
o
o
m
'
,
 
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
,
 
(
i
n
t
)
 
$
r
o
o
m
U
i
d
)
.
'
"
 
/
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
H
T
Y
P
E
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
T
Y
P
E
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
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
T
Y
P
E
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
H
N
A
M
E
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
N
A
M
E
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
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
N
A
M
E
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
H
N
U
M
B
E
R
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
N
U
M
B
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
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
N
U
M
B
E
R
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
H
F
L
O
O
R
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
F
L
O
O
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
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
F
L
O
O
R
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
H
M
A
X
P
E
O
P
L
E
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
M
A
X
P
E
O
P
L
E
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
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
M
A
X
P
E
O
P
L
E
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
H
F
E
A
T
U
R
E
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
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
F
E
A
T
U
R
E
S
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
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
F
E
A
T
U
R
E
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
H
S
U
P
P
L
I
M
E
N
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
A
_
S
U
P
P
L
I
M
E
N
T
S
_
S
I
N
G
L
E
P
E
R
S
O
N
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
A
_
S
U
P
P
L
I
M
E
N
T
S
_
S
I
N
G
L
E
P
E
R
S
O
N
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
S
U
P
P
L
I
M
E
N
T
_
D
E
S
C
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
C
O
M
_
S
P
S
_
E
D
I
T
R
O
O
M
_
D
E
S
C
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
S
P
S
_
E
D
I
T
R
O
O
M
_
D
E
S
C
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
A
G
E
T
I
T
L
E
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
C
O
M
_
M
R
_
E
B
_
H
R
O
O
M
_
D
E
T
A
I
L
S
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
E
B
_
H
R
O
O
M
_
D
E
T
A
I
L
S
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
o
u
t
p
u
t
[
 
'
H
R
O
O
M
_
T
A
G
L
I
N
E
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
R
O
O
M
_
T
A
G
L
I
N
E
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
R
O
O
M
_
T
A
G
L
I
N
E
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
o
u
t
p
u
t
[
 
'
H
R
O
O
M
_
D
E
S
C
R
I
P
T
I
O
N
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
R
O
O
M
_
D
E
S
C
R
I
P
T
I
O
N
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
R
O
O
M
_
D
E
S
C
R
I
P
T
I
O
N
'
,
 
f
a
l
s
e
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
a
l
l
o
w
H
T
M
L
e
d
i
t
o
r
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
w
i
d
t
h
 
=
 
'
9
5
%
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
h
e
i
g
h
t
 
=
 
'
2
5
0
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
l
 
=
 
'
2
0
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
w
 
=
 
'
3
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
R
O
O
M
_
D
E
S
C
R
I
P
T
I
O
N
'
 
]
 
=
 
e
d
i
t
o
r
A
r
e
a
T
e
x
t
(
'
r
o
o
m
_
d
e
s
c
r
i
p
t
i
o
n
'
,
 
$
r
o
o
m
_
d
e
s
c
r
i
p
t
i
o
n
,
 
'
r
o
o
m
_
d
e
s
c
r
i
p
t
i
o
n
'
,
 
$
w
i
d
t
h
,
 
$
h
e
i
g
h
t
,
 
$
c
o
l
,
 
$
r
o
w
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
d
d
h
e
a
d
d
a
t
a
(
'
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
'
,
 
J
O
M
R
E
S
_
N
O
D
E
_
M
O
D
U
L
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
s
i
m
p
l
e
-
c
m
e
d
i
t
o
r
/
d
i
s
t
/
'
,
 
'
s
i
m
p
l
e
m
d
e
.
m
i
n
.
j
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
a
d
d
h
e
a
d
d
a
t
a
(
'
c
s
s
'
,
 
J
O
M
R
E
S
_
N
O
D
E
_
M
O
D
U
L
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
s
i
m
p
l
e
-
c
m
e
d
i
t
o
r
/
d
i
s
t
/
'
,
 
'
s
i
m
p
l
e
m
d
e
.
m
i
n
.
c
s
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
S
I
M
P
L
E
M
D
E
_
J
A
V
A
S
C
R
I
P
T
'
]
 
=
 
'

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
<
s
c
r
i
p
t
 
t
y
p
e
=
"
t
e
x
t
/
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
"
>

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
j
o
m
r
e
s
J
q
u
e
r
y
(
d
o
c
u
m
e
n
t
)
.
r
e
a
d
y
(
f
u
n
c
t
i
o
n
 
(
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
v
a
r
 
b
u
t
t
o
n
s
 
=
 
 
[
"
b
o
l
d
"
,
 
"
i
t
a
l
i
c
"
,
 
"
h
e
a
d
i
n
g
"
,
 
"
s
t
r
i
k
e
t
h
r
o
u
g
h
"
 
,
 
"
|
"
 
,
 
"
u
n
o
r
d
e
r
e
d
-
l
i
s
t
"
 
,
 
"
o
r
d
e
r
e
d
-
l
i
s
t
"
 
,
 
"
c
l
e
a
n
-
b
l
o
c
k
"
 
,
 
"
i
m
a
g
e
"
 
,
 
"
t
a
b
l
e
"
 
,
 
"
h
o
r
i
z
o
n
t
a
l
-
r
u
l
e
"
 
,
 
"
|
"
,
 
"
p
r
e
v
i
e
w
"
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
v
a
r
 
s
i
m
p
l
e
m
d
e
 
=
 
n
e
w
 
S
i
m
p
l
e
M
D
E
(
{
 
e
l
e
m
e
n
t
:
 
d
o
c
u
m
e
n
t
.
g
e
t
E
l
e
m
e
n
t
B
y
I
d
(
"
r
o
o
m
_
d
e
s
c
r
i
p
t
i
o
n
"
)
 
,
t
o
o
l
b
a
r
:
 
b
u
t
t
o
n
s
,
 
}
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
<
/
s
c
r
i
p
t
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
M
A
R
K
D
O
W
N
_
B
U
T
T
O
N
'
 
]
 
=
 
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
0
6
0
0
0
'
,
 
'
s
h
o
w
_
m
a
r
k
d
o
w
n
_
m
o
d
a
l
'
,
 
a
r
r
a
y
(
'
o
u
t
p
u
t
_
n
o
w
'
 
=
>
 
f
a
l
s
e
)
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
R
O
O
M
_
D
E
S
C
R
I
P
T
I
O
N
'
 
]
 
=
 
'
<
t
e
x
t
a
r
e
a
 
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
 
f
o
r
m
-
c
o
n
t
r
o
l
"
 
c
o
l
s
=
"
7
0
"
 
r
o
w
s
=
"
5
"
 
i
d
=
"
r
o
o
m
_
d
e
s
c
r
i
p
t
i
o
n
"
 
n
a
m
e
=
"
r
o
o
m
_
d
e
s
c
r
i
p
t
i
o
n
"
>
'
.
j
o
m
r
e
s
_
r
e
m
o
v
e
_
H
T
M
L
(
 
$
r
o
o
m
_
d
e
s
c
r
i
p
t
i
o
n
 
,
 
'
'
)
.
'
<
/
t
e
x
t
a
r
e
a
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}


	
	
	
i
f
 
(
$
c
l
o
n
e
 
>
 
0
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
R
O
O
M
U
I
D
'
 
]
 
=
 
0
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
R
O
O
M
U
I
D
'
 
]
 
=
 
$
r
o
o
m
U
i
d
;

	
	
	
}


 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
t
b
a
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
o
o
l
b
a
r
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
t
b
 
=
 
$
j
r
t
b
a
r
-
>
s
t
a
r
t
T
a
b
l
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
t
o
o
l
b
a
r
I
t
e
m
(
'
c
a
n
c
e
l
'
,
 
j
o
m
r
e
s
U
R
L
(
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
.
'
&
t
a
s
k
=
l
i
s
t
_
r
e
s
o
u
r
c
e
s
'
)
,
 
$
c
a
n
c
e
l
T
e
x
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
t
o
o
l
b
a
r
I
t
e
m
(
'
s
a
v
e
'
,
 
'
'
,
 
$
s
a
v
e
T
e
x
t
,
 
t
r
u
e
,
 
'
s
a
v
e
_
r
e
s
o
u
r
c
e
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
e
n
d
T
a
b
l
e
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
J
O
M
R
E
S
T
O
O
L
B
A
R
'
 
]
 
=
 
$
j
r
t
b
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
B
A
C
K
E
N
D
)
;

 
 
 
 
 
 
 
 
 
 
 
 
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
e
d
i
t
_
r
e
s
o
u
r
c
e
.
h
t
m
l
'
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

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{
 
/
/
S
R
P
s

 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
x
_
p
e
o
p
l
e
 
=
 
'
1
0
'
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
o
o
m
U
i
d
 
>
 
0
 
&
&
 
$
b
a
s
i
c
_
r
o
o
m
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
e
t
_
r
o
o
m
(
$
r
o
o
m
U
i
d
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
 
=
 
$
b
a
s
i
c
_
r
o
o
m
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
r
o
o
m
[
'
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
x
_
p
e
o
p
l
e
 
=
 
$
b
a
s
i
c
_
r
o
o
m
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
r
o
o
m
[
'
m
a
x
_
p
e
o
p
l
e
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
/
/
d
r
o
p
d
o
w
n
 
w
i
t
h
 
r
o
o
m
 
t
y
p
e
s
 
a
s
s
i
g
n
e
d
 
t
o
 
t
h
i
s
 
p
r
o
p
e
r
t
y
 
t
y
p
e

 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
s
s
O
p
t
i
o
n
s
 
=
 
a
r
r
a
y
(
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
-
>
t
h
i
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
r
o
o
m
_
c
l
a
s
s
e
s
 
a
s
 
$
k
e
y
 
=
>
 
$
r
o
o
m
C
l
a
s
s
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
n
u
l
l
(
$
r
o
o
m
C
l
a
s
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
l
a
s
s
O
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
k
e
y
,
 
$
r
o
o
m
C
l
a
s
s
[
 
'
a
b
b
v
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
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
D
R
O
P
D
O
W
N
L
I
S
T
'
 
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
c
l
a
s
s
O
p
t
i
o
n
s
,
 
'
r
o
o
m
C
l
a
s
s
e
s
'
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
r
o
o
m
_
c
l
a
s
s
e
s
_
u
i
d
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
X
P
E
O
P
L
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
 
j
o
m
r
e
s
H
T
M
L
:
:
i
n
t
e
g
e
r
S
e
l
e
c
t
L
i
s
t
(
1
,
 
$
m
a
x
_
m
a
x
_
p
e
o
p
l
e
,
 
1
,
 
'
m
a
x
_
p
e
o
p
l
e
'
,
 
'
'
,
 
$
m
a
x
_
p
e
o
p
l
e
)
;


	
	
	
i
f
 
(
$
c
l
o
n
e
 
>
 
0
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
R
O
O
M
U
I
D
'
 
]
 
=
 
0
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
R
O
O
M
U
I
D
'
 
]
 
=
 
$
r
o
o
m
U
i
d
;

	
	
	
}


 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
t
b
a
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
o
o
l
b
a
r
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
t
b
 
=
 
$
j
r
t
b
a
r
-
>
s
t
a
r
t
T
a
b
l
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
t
o
o
l
b
a
r
I
t
e
m
(
'
c
a
n
c
e
l
'
,
 
j
o
m
r
e
s
U
R
L
(
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
.
'
&
t
a
s
k
=
l
i
s
t
_
r
e
s
o
u
r
c
e
s
'
)
,
 
$
c
a
n
c
e
l
T
e
x
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
t
o
o
l
b
a
r
I
t
e
m
(
'
s
a
v
e
'
,
 
'
'
,
 
$
s
a
v
e
T
e
x
t
,
 
t
r
u
e
,
 
'
s
a
v
e
_
r
e
s
o
u
r
c
e
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
e
n
d
T
a
b
l
e
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
J
O
M
R
E
S
T
O
O
L
B
A
R
'
 
]
 
=
 
$
j
r
t
b
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
A
G
E
T
I
T
L
E
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
C
L
A
S
S
_
A
B
B
V
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
E
B
_
R
O
O
M
_
C
L
A
S
S
_
A
B
B
V
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
V
R
C
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
T
Y
P
E
_
I
N
F
O
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
C
O
M
_
M
R
_
E
B
_
R
O
O
M
_
C
L
A
S
S
_
A
B
B
V
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
E
B
_
R
O
O
M
_
C
L
A
S
S
_
A
B
B
V
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
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
M
A
X
P
E
O
P
L
E
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
C
O
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
M
A
X
P
E
O
P
L
E
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
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
M
A
X
P
E
O
P
L
E
'
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
B
A
C
K
E
N
D
)
;

 
 
 
 
 
 
 
 
 
 
 
 
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
e
d
i
t
_
S
R
P
_
p
r
o
p
e
r
t
y
t
y
p
e
.
h
t
m
l
'
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

 
 
 
 
 
 
 
 
}

 
 
 
 
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
J
O
M
R
E
S
_
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
P
R
O
P
E
R
T
Y
A
D
M
I
N
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
F
R
O
N
T
_
M
R
_
M
E
N
U
_
A
D
M
I
N
_
P
R
O
P
E
R
T
Y
A
D
M
I
N
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
M
_
A
_
C
A
N
C
E
L
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
A
_
C
A
N
C
E
L
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
M
_
M
R
_
R
O
O
M
_
D
E
L
E
T
E
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
R
O
O
M
_
D
E
L
E
T
E
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
M
_
M
R
_
S
A
V
E
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
S
A
V
E
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
U
P
L
O
A
D
_
I
M
A
G
E
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
U
P
L
O
A
D
_
I
M
A
G
E
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
M
_
M
R
_
V
R
C
T
_
T
A
B
_
R
O
O
M
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
V
R
C
T
_
T
A
B
_
R
O
O
M
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
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
T
Y
P
E
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
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
T
Y
P
E
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
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
N
A
M
E
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
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
N
A
M
E
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
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
N
U
M
B
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
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
N
U
M
B
E
R
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
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
F
L
O
O
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
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
F
L
O
O
R
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
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
M
A
X
P
E
O
P
L
E
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
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
M
A
X
P
E
O
P
L
E
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
M
_
M
R
_
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
F
E
A
T
U
R
E
S
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
V
R
C
T
_
R
O
O
M
_
H
E
A
D
E
R
_
F
E
A
T
U
R
E
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
M
_
M
R
_
N
O
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
N
O
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
M
_
M
R
_
Y
E
S
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
Y
E
S
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

