
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
p
r
o
p
e
r
t
y

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
s
t
a
r
s
_
a
r
r
 
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
g
l
o
b
a
l
P
f
e
a
t
u
r
e
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

 
 
 
 
 
 
 
 
$
c
h
a
n
g
e
_
c
o
u
n
t
r
y
_
w
a
r
n
i
n
g
 
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
a
p
p
r
o
v
a
l
_
w
a
r
n
i
n
g
 
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
d
e
f
a
u
l
t
T
e
x
t
 
=
 
'
C
h
a
n
g
e
 
M
e
!
'
;


 
 
 
 
 
 
 
 
/
/
T
O
D
O
:
 
m
a
y
 
n
o
t
 
b
e
 
n
e
e
d
e
d
 
a
n
y
m
o
r
e

 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
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
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
 
'
1
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
g
e
t
 
c
u
r
r
e
n
t
 
p
r
o
p
e
r
t
y
 
d
e
t
a
i
l
s

 
 
 
 
 
 
 
 
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
)
;

	
	

	
	
/
/
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
s

	
	
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
t
y
p
e
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
p
r
o
p
e
r
t
y
_
t
y
p
e
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
P
R
O
P
E
R
T
Y
_
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
T
R
E
E
T
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
s
t
r
e
e
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
O
W
N
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
t
o
w
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
P
R
O
P
E
R
T
Y
_
P
O
S
T
C
O
D
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
p
o
s
t
c
o
d
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
E
L
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
t
e
l
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
F
A
X
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
f
a
x
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
E
M
A
I
L
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
e
m
a
i
l
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
I
C
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
r
e
a
l
_
e
s
t
a
t
e
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
p
r
i
c
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
M
E
T
A
T
I
T
L
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
m
e
t
a
t
i
t
l
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
M
E
T
A
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
m
e
t
a
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
M
E
T
A
K
E
Y
W
O
R
D
S
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
m
e
t
a
k
e
y
w
o
r
d
s
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
A
P
I
K
E
Y
'
 
]
 
=
 
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
g
o
o
g
l
e
_
m
a
p
s
_
a
p
i
_
k
e
y
'
 
]
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
U
I
D
'
 
]
 
=
 
$
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
E
R
M
I
T
_
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
e
r
m
i
t
_
n
u
m
b
e
r
;


 
 
 
 
 
 
 
 
/
/
p
r
o
p
e
r
t
y
 
r
e
g
i
o
n
 
a
n
d
 
c
o
u
n
t
r
y

 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
 
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
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
 
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
c
o
u
n
t
r
y
_
c
o
d
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
l
i
m
i
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
c
o
u
n
t
r
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
O
U
N
T
R
I
E
S
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
 
c
r
e
a
t
e
C
o
u
n
t
r
i
e
s
D
r
o
p
d
o
w
n
(
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
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
R
E
G
I
O
N
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
 
s
e
t
u
p
R
e
g
i
o
n
s
(
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
,
 
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
r
e
g
i
o
n
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
A
J
A
X
_
C
O
U
N
T
R
I
E
S
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
 
c
r
e
a
t
e
S
i
m
p
l
e
C
o
u
n
t
r
i
e
s
D
r
o
p
d
o
w
n
(
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
,
 
'
c
o
u
n
t
r
y
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
A
J
A
X
_
R
E
G
I
O
N
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
 
s
e
t
u
p
R
e
g
i
o
n
s
(
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
,
 
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
r
e
g
i
o
n
,
 
f
a
l
s
e
,
 
'
r
e
g
i
o
n
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
o
u
t
p
u
t
[
 
'
C
O
U
N
T
R
I
E
S
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
 
g
e
t
S
i
m
p
l
e
C
o
u
n
t
r
y
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
l
i
m
i
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
c
o
u
n
t
r
y
_
c
o
u
n
t
r
y
'
 
]
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
E
G
I
O
N
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
 
s
e
t
u
p
R
e
g
i
o
n
s
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
l
i
m
i
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
c
o
u
n
t
r
y
_
c
o
u
n
t
r
y
'
 
]
,
 
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
r
e
g
i
o
n
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
A
J
A
X
_
C
O
U
N
T
R
I
E
S
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
 
c
r
e
a
t
e
S
i
m
p
l
e
C
o
u
n
t
r
i
e
s
D
r
o
p
d
o
w
n
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
l
i
m
i
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
c
o
u
n
t
r
y
_
c
o
u
n
t
r
y
'
 
]
,
 
'
c
o
u
n
t
r
y
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
A
J
A
X
_
R
E
G
I
O
N
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
 
s
e
t
u
p
R
e
g
i
o
n
s
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
l
i
m
i
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
c
o
u
n
t
r
y
_
c
o
u
n
t
r
y
'
 
]
,
 
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
r
e
g
i
o
n
,
 
f
a
l
s
e
,
 
'
r
e
g
i
o
n
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
p
r
o
p
e
r
t
y
 
l
a
t
i
t
u
d
e
 
a
n
d
 
l
o
n
g
i
t
u
d
e

 
 
 
 
 
 
 
 
i
f
 
(
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
l
a
t
 
!
=
 
'
'
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
A
T
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
l
a
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
L
O
N
G
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
l
o
n
g
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
A
T
'
 
]
 
=
 
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
d
e
f
a
u
l
t
_
l
a
t
'
 
]
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
O
N
G
'
 
]
 
=
 
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
d
e
f
a
u
l
t
_
l
o
n
g
'
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
i
f
 
t
h
e
 
l
a
t
/
l
o
n
g
 
a
r
e
 
s
t
i
l
l
 
e
m
p
t
y
,
 
l
e
t
'
s
 
a
s
k
 
A
u
n
t
i
e
 
G
o
o
g
l
e
 
w
h
a
t
 
t
h
e
 
l
a
t
 
l
o
n
g
 
s
h
o
u
l
d
 
b
e
.

 
 
 
 
 
 
 
 
/
/
T
O
D
O
:
 
i
s
 
t
h
i
s
 
s
t
i
l
l
 
n
e
e
d
e
d
?

 
 
 
 
 
 
 
 
i
f
 
(
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
A
T
'
 
]
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
s
e
_
u
r
i
 
=
 
'
h
t
t
p
s
:
/
/
m
a
p
s
-
a
p
i
-
s
s
l
.
g
o
o
g
l
e
.
c
o
m
/
'
;

	
	
	
$
q
u
e
r
y
_
s
t
r
i
n
g
 
=
 
'
m
a
p
s
/
a
p
i
/
g
e
o
c
o
d
e
/
j
s
o
n
?
a
d
d
r
e
s
s
=
'
.
u
r
l
e
n
c
o
d
e
(
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
)
.
'
,
'
.
u
r
l
e
n
c
o
d
e
(
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
s
t
r
e
e
t
)
.
'
,
'
.
u
r
l
e
n
c
o
d
e
(
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
t
o
w
n
)
.
'
,
'
.
u
r
l
e
n
c
o
d
e
(
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
r
e
g
i
o
n
)
.
'
,
'
.
u
r
l
e
n
c
o
d
e
(
$
s
e
l
e
c
t
e
d
C
o
u
n
t
r
y
)
;

	
	
	

	
	
	
$
r
e
s
p
o
n
s
e
 
=
 
'
'
;

	
	
	

	
	
	
t
r
y
 
{

	
	
	
	
$
c
l
i
e
n
t
 
=
 
n
e
w
 
G
u
z
z
l
e
H
t
t
p
\
C
l
i
e
n
t
(
[

	
	
	
	
	
'
b
a
s
e
_
u
r
i
'
 
=
>
 
$
b
a
s
e
_
u
r
i

	
	
	
	
]
)
;


	
	
	
	
l
o
g
g
i
n
g
:
:
l
o
g
_
m
e
s
s
a
g
e
(
'
S
t
a
r
t
i
n
g
 
g
u
z
z
l
e
 
c
a
l
l
 
t
o
 
'
.
$
b
a
s
e
_
u
r
i
.
$
q
u
e
r
y
_
s
t
r
i
n
g
,
 
'
G
u
z
z
l
e
'
,
 
'
D
E
B
U
G
'
)
;

	
	
	
	

	
	
	
	
$
r
e
s
p
o
n
s
e
 
=
 
$
c
l
i
e
n
t
-
>
r
e
q
u
e
s
t
(
'
G
E
T
'
,
 
$
q
u
e
r
y
_
s
t
r
i
n
g
)
-
>
g
e
t
B
o
d
y
(
)
-
>
g
e
t
C
o
n
t
e
n
t
s
(
)
;

	
	
	
}

	
	
	
c
a
t
c
h
 
(
E
x
c
e
p
t
i
o
n
 
$
e
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
u
s
e
r
_
f
e
e
d
b
a
c
k
 
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
u
s
e
r
_
f
e
e
d
b
a
c
k
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
u
s
e
r
_
f
e
e
d
b
a
c
k
-
>
c
o
n
s
t
r
u
c
t
_
m
e
s
s
a
g
e
(
a
r
r
a
y
(
'
m
e
s
s
a
g
e
'
=
>
'
C
o
u
l
d
 
n
o
t
 
g
e
t
 
m
a
p
 
c
o
o
r
d
i
n
a
t
e
s
'
,
 
'
c
s
s
_
c
l
a
s
s
'
=
>
'
a
l
e
r
t
-
d
a
n
g
e
r
 
a
l
e
r
t
-
e
r
r
o
r
'
)
)
;

	
	
	
}

	
	
	

	
	
	
$
d
e
c
o
d
e
d
 
=
 
j
s
o
n
_
d
e
c
o
d
e
(
$
r
e
s
p
o
n
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 

	
	
	
i
f
 
(
i
s
s
e
t
(
$
d
e
c
o
d
e
d
-
>
r
e
s
u
l
t
s
[
 
0
 
]
-
>
g
e
o
m
e
t
r
y
-
>
l
o
c
a
t
i
o
n
-
>
l
a
t
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
A
T
'
 
]
 
=
 
$
d
e
c
o
d
e
d
-
>
r
e
s
u
l
t
s
[
 
0
 
]
-
>
g
e
o
m
e
t
r
y
-
>
l
o
c
a
t
i
o
n
-
>
l
a
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
L
O
N
G
'
 
]
 
=
 
$
d
e
c
o
d
e
d
-
>
r
e
s
u
l
t
s
[
 
0
 
]
-
>
g
e
o
m
e
t
r
y
-
>
l
o
c
a
t
i
o
n
-
>
l
n
g
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
b
u
i
l
d
 
t
h
e
 
m
a
p

 
 
 
 
 
 
 
 
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
 
=
 
a
r
r
a
y
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
u
i
d
'
 
=
>
 
$
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
,
 
'
w
i
d
t
h
'
 
=
>
 
'
4
0
0
'
,
 
'
h
e
i
g
h
t
'
 
=
>
 
'
4
0
0
'
,
 
'
e
d
i
t
i
n
g
_
m
a
p
'
 
=
>
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
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
1
0
5
0
'
,
 
'
x
_
g
e
o
c
o
d
e
r
'
,
 
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
P
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
m
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
D
a
t
a
[
 
'
0
1
0
5
0
'
 
]
[
 
'
x
_
g
e
o
c
o
d
e
r
'
 
]
;


 
 
 
 
 
 
 
 
/
/
p
r
o
p
e
r
t
y
 
p
o
l
i
c
i
e
s
 
a
n
d
 
d
i
s
c
l
a
i
m
e
r
s

 
 
 
 
 
 
 
 
i
f
 
(
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
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
 
=
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
 
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
D
E
F
A
U
L
T
_
T
E
R
M
S
_
A
N
D
_
C
O
N
D
I
T
I
O
N
S
'
,
 
'
D
E
F
A
U
L
T
_
T
E
R
M
S
_
A
N
D
_
C
O
N
D
I
T
I
O
N
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

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
 
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
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
h
t
m
l
 
e
d
i
t
o
r
 
f
i
e
l
d
s
 
(
d
e
c
r
i
p
t
i
o
n
,
 
a
r
e
a
 
a
c
t
i
v
i
t
i
e
s
,
 
e
t
c
)

 
 
 
 
 
 
 
 
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
1
0
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
C
H
E
C
K
I
N
_
T
I
M
E
S
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
p
r
o
p
e
r
t
y
_
c
h
e
c
k
i
n
_
t
i
m
e
s
'
,
 
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
c
h
e
c
k
i
n
_
t
i
m
e
s
,
 
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
c
h
e
c
k
i
n
_
t
i
m
e
s
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
A
R
E
A
_
A
C
T
I
V
I
T
I
E
S
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
p
r
o
p
e
r
t
y
_
a
r
e
a
_
a
c
t
i
v
i
t
i
e
s
'
,
 
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
a
r
e
a
_
a
c
t
i
v
i
t
i
e
s
,
 
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
a
r
e
a
_
a
c
t
i
v
i
t
i
e
s
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
D
R
I
V
I
N
G
_
D
I
R
E
C
T
I
O
N
S
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
r
i
v
i
n
g
_
d
i
r
e
c
t
i
o
n
s
'
,
 
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
d
r
i
v
i
n
g
_
d
i
r
e
c
t
i
o
n
s
,
 
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
d
r
i
v
i
n
g
_
d
i
r
e
c
t
i
o
n
s
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
A
I
R
P
O
R
T
S
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
p
r
o
p
e
r
t
y
_
a
i
r
p
o
r
t
s
'
,
 
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
a
i
r
p
o
r
t
s
,
 
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
a
i
r
p
o
r
t
s
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
O
T
H
E
R
T
R
A
N
S
P
O
R
T
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
p
r
o
p
e
r
t
y
_
o
t
h
e
r
t
r
a
n
s
p
o
r
t
'
,
 
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
o
t
h
e
r
t
r
a
n
s
p
o
r
t
,
 
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
o
t
h
e
r
t
r
a
n
s
p
o
r
t
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
P
O
L
I
C
I
E
S
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
S
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
p
r
o
p
e
r
t
y
_
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
'
,
 
$
p
r
o
p
e
r
t
y
_
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
,
 
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
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
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
p
r
o
p
e
r
t
y
_
c
h
e
c
k
i
n
_
t
i
m
e
s
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
p
r
o
p
e
r
t
y
_
a
r
e
a
_
a
c
t
i
v
i
t
i
e
s
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
r
i
v
i
n
g
_
d
i
r
e
c
t
i
o
n
s
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
p
r
o
p
e
r
t
y
_
a
i
r
p
o
r
t
s
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
p
r
o
p
e
r
t
y
_
o
t
h
e
r
t
r
a
n
s
p
o
r
t
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
p
r
o
p
e
r
t
y
_
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
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
P
R
O
P
E
R
T
Y
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
C
H
E
C
K
I
N
_
T
I
M
E
S
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
p
r
o
p
e
r
t
y
_
c
h
e
c
k
i
n
_
t
i
m
e
s
"
 
n
a
m
e
=
"
p
r
o
p
e
r
t
y
_
c
h
e
c
k
i
n
_
t
i
m
e
s
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
c
h
e
c
k
i
n
_
t
i
m
e
s
 
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
A
R
E
A
_
A
C
T
I
V
I
T
I
E
S
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
p
r
o
p
e
r
t
y
_
a
r
e
a
_
a
c
t
i
v
i
t
i
e
s
"
 
n
a
m
e
=
"
p
r
o
p
e
r
t
y
_
a
r
e
a
_
a
c
t
i
v
i
t
i
e
s
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
a
r
e
a
_
a
c
t
i
v
i
t
i
e
s
 
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
D
R
I
V
I
N
G
_
D
I
R
E
C
T
I
O
N
S
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
r
i
v
i
n
g
_
d
i
r
e
c
t
i
o
n
s
"
 
n
a
m
e
=
"
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
r
i
v
i
n
g
_
d
i
r
e
c
t
i
o
n
s
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
d
r
i
v
i
n
g
_
d
i
r
e
c
t
i
o
n
s
 
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
A
I
R
P
O
R
T
S
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
p
r
o
p
e
r
t
y
_
a
i
r
p
o
r
t
s
"
 
n
a
m
e
=
"
p
r
o
p
e
r
t
y
_
a
i
r
p
o
r
t
s
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
a
i
r
p
o
r
t
s
 
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
O
T
H
E
R
T
R
A
N
S
P
O
R
T
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
p
r
o
p
e
r
t
y
_
o
t
h
e
r
t
r
a
n
s
p
o
r
t
"
 
n
a
m
e
=
"
p
r
o
p
e
r
t
y
_
o
t
h
e
r
t
r
a
n
s
p
o
r
t
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
o
t
h
e
r
t
r
a
n
s
p
o
r
t
 
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
P
O
L
I
C
I
E
S
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
S
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
p
r
o
p
e
r
t
y
_
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
"
 
n
a
m
e
=
"
p
r
o
p
e
r
t
y
_
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
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
p
r
o
p
e
r
t
y
_
p
o
l
i
c
i
e
s
_
d
i
s
c
l
a
i
m
e
r
s
 
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


 
 
 
 
 
 
 
 
/
/
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
 
d
r
o
p
d
o
w
n
 
(
e
x
t
e
n
d
e
d
 
v
e
r
s
i
o
n
,
 
w
i
t
h
 
e
x
p
l
a
n
a
t
i
o
n
 
a
b
o
u
t
 
w
h
a
t
 
w
i
l
l
 
g
u
e
s
t
s
 
b
o
o
k
 
i
n
 
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
)

 
 
 
 
 
 
 
 
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
F
R
O
N
T
_
P
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
F
R
O
N
T
_
P
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
T
Y
P
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
t
y
p
e
s
-
>
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
T
y
p
e
D
r
o
p
d
o
w
n
(
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
t
y
p
e
_
i
d
,
 
t
r
u
e
)
;

	
	

	
	
/
/
p
r
o
p
e
r
t
y
 
c
a
t
e
g
o
r
y
 
d
r
o
p
d
o
w
n

	
	
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
c
a
t
e
g
o
r
i
e
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
p
r
o
p
e
r
t
y
_
c
a
t
e
g
o
r
i
e
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
P
R
O
P
E
R
T
Y
_
C
A
T
E
G
O
R
I
E
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
p
r
o
p
e
r
t
y
_
c
a
t
e
g
o
r
i
e
s
-
>
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
C
a
t
e
g
o
r
i
e
s
D
r
o
p
d
o
w
n
(
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
c
a
t
_
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
H
C
A
T
E
G
O
R
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
C
A
T
E
G
O
R
Y
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
C
A
T
E
G
O
R
Y
'
)
;


 
 
 
 
 
 
 
 
/
/
p
r
o
p
e
r
t
y
 
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
r
o
p
e
r
t
y
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
f
e
a
t
u
r
e
s
)
;


 
 
 
 
 
 
 
 
$
c
o
u
n
t
e
r
 
=
 
0
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
a
l
l
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
f
e
a
t
u
r
e
s
 
a
s
 
$
k
 
=
>
 
$
v
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
t
y
p
e
_
i
d
,
 
$
v
[
'
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
'
]
)
)
 
{

	
	
	
	
$
r
 
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
r
[
 
'
i
s
c
h
e
c
k
e
d
'
 
]
 
=
 
'
'
;


	
	
	
	
$
r
[
 
'
P
I
D
'
 
]
 
=
 
$
k
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
k
,
 
$
p
r
o
p
e
r
t
y
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
r
[
 
'
i
s
c
h
e
c
k
e
d
'
 
]
 
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
r
[
 
'
F
E
A
T
U
R
E
'
 
]
 
=
 
j
o
m
r
e
s
_
m
a
k
e
T
o
o
l
t
i
p
(
$
v
[
'
a
b
b
v
'
]
,
 
$
v
[
'
a
b
b
v
'
]
,
 
$
v
[
'
d
e
s
c
'
]
,
 
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
p
f
e
a
t
u
r
e
s
/
'
.
$
v
[
'
i
m
a
g
e
'
]
,
 
'
'
,
 
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
f
e
a
t
u
r
e
'
,
 
a
r
r
a
y
(
)
)
;


	
	
	
	
$
r
[
 
'
B
R
'
 
]
 
=
 
'
'
;

	
	
	
	
i
f
 
(
$
c
o
u
n
t
e
r
 
=
=
 
8
)
 
{

	
	
	
	
	
$
r
[
 
'
B
R
'
 
]
 
=
 
'
<
b
r
 
/
>
'
;

	
	
	
	
	
$
c
o
u
n
t
e
r
 
=
 
0
;

	
	
	
	
}


	
	
	
	
+
+
$
c
o
u
n
t
e
r
;

	
	
	
	
$
g
l
o
b
a
l
P
f
e
a
t
u
r
e
s
[
]
 
=
 
$
r
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
m
u
l
t
i
s
i
t
e
s
 
i
n
t
e
g
r
a
t
i
o
n

 
 
 
 
 
 
 
 
$
m
u
l
t
i
 
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
P
A
T
H
_
A
D
M
I
N
I
S
T
R
A
T
O
R
.
J
R
D
S
.
'
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
'
.
J
R
D
S
.
'
c
o
m
_
m
u
l
t
i
s
i
t
e
s
'
.
J
R
D
S
.
'
h
e
l
p
e
r
s
'
.
J
R
D
S
.
'
u
t
i
l
s
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
n
c
l
u
d
e
_
o
n
c
e
 
J
P
A
T
H
_
A
D
M
I
N
I
S
T
R
A
T
O
R
.
J
R
D
S
.
'
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
'
.
J
R
D
S
.
'
c
o
m
_
m
u
l
t
i
s
i
t
e
s
'
.
J
R
D
S
.
'
h
e
l
p
e
r
s
'
.
J
R
D
S
.
'
u
t
i
l
s
.
p
h
p
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
c
l
a
s
s
_
e
x
i
s
t
s
(
'
M
u
l
t
i
s
i
t
e
s
H
e
l
p
e
r
U
t
i
l
s
'
)
 
&
&
 
m
e
t
h
o
d
_
e
x
i
s
t
s
(
'
M
u
l
t
i
s
i
t
e
s
H
e
l
p
e
r
U
t
i
l
s
'
,
 
'
g
e
t
C
o
m
b
o
S
i
t
e
I
D
s
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
m
b
o
S
i
t
e
I
D
s
 
=
 
M
u
l
t
i
s
i
t
e
s
H
e
l
p
e
r
U
t
i
l
s
:
:
g
e
t
C
o
m
b
o
S
i
t
e
I
D
s
(
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
s
i
t
e
_
i
d
,
 
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
i
t
e
_
i
d
'
,
 
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
M
U
L
T
I
S
I
T
E
S
_
S
E
L
E
C
T
_
A
_
S
I
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
M
U
L
T
I
S
I
T
E
S
_
S
E
L
E
C
T
_
A
_
S
I
T
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
c
o
m
b
o
S
i
t
e
I
D
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
u
l
t
i
s
i
t
e
s
[
'
L
A
B
E
L
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
M
U
L
T
I
S
I
T
E
S
_
M
U
L
T
I
S
I
T
E
S
_
L
A
B
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
M
U
L
T
I
S
I
T
E
S
_
M
U
L
T
I
S
I
T
E
S
_
L
A
B
E
L
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
u
l
t
i
s
i
t
e
s
[
'
M
U
L
T
I
S
I
T
E
S
_
S
E
L
E
C
T
'
]
 
=
 
$
c
o
m
b
o
S
i
t
e
I
D
s
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
u
l
t
i
 
=
 
a
r
r
a
y
(
$
m
u
l
t
i
s
i
t
e
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
o
t
h
e
r
 
l
a
n
g
u
a
g
e
 
s
t
r
i
n
g
s

 
 
 
 
 
 
 
 
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
V
R
C
T
_
T
A
B
_
P
R
O
P
E
R
T
Y
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
T
A
B
_
P
R
O
P
E
R
T
Y
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
E
Q
U
I
R
E
D
F
I
E
L
D
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
R
E
Q
U
I
R
E
D
F
I
E
L
D
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
R
E
Q
U
I
R
E
D
F
I
E
L
D
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
 
'
H
C
O
U
N
T
R
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
H
E
A
D
E
R
_
C
O
U
N
T
R
Y
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
C
O
U
N
T
R
Y
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
H
R
E
G
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
H
E
A
D
E
R
_
R
E
G
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
H
E
A
D
E
R
_
R
E
G
I
O
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
P
R
O
P
E
R
T
Y
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
P
R
O
P
E
R
T
Y
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
 
'
H
S
T
R
E
E
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
H
E
A
D
E
R
_
S
T
R
E
E
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
H
E
A
D
E
R
_
S
T
R
E
E
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
 
'
H
T
O
W
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
H
E
A
D
E
R
_
T
O
W
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
H
E
A
D
E
R
_
T
O
W
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
 
'
H
P
O
S
T
C
O
D
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
P
O
S
T
C
O
D
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
P
O
S
T
C
O
D
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
 
'
H
T
E
L
E
P
H
O
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
H
E
A
D
E
R
_
T
E
L
E
P
H
O
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
H
E
A
D
E
R
_
T
E
L
E
P
H
O
N
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
 
'
H
F
A
X
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
F
A
X
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
F
A
X
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
E
M
A
I
L
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
E
M
A
I
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
H
E
A
D
E
R
_
E
M
A
I
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
 
'
H
P
R
I
C
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
X
T
R
A
_
P
R
I
C
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
E
X
T
R
A
_
P
R
I
C
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
P
R
O
P
E
R
T
Y
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
P
R
O
P
E
R
T
Y
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
 
'
H
P
R
O
P
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
H
E
A
D
E
R
_
P
R
O
P
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
H
E
A
D
E
R
_
P
R
O
P
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
C
H
E
C
K
I
N
T
I
M
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
C
H
E
C
K
I
N
T
I
M
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
C
H
E
C
K
I
N
T
I
M
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
 
'
H
A
R
E
A
A
C
T
I
V
I
T
I
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
A
R
E
A
A
C
T
I
V
I
T
I
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
A
R
E
A
A
C
T
I
V
I
T
I
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
 
'
H
D
R
I
V
I
N
G
D
I
R
E
C
T
I
O
N
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
D
R
I
V
I
N
G
D
I
R
E
C
T
I
O
N
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
D
R
I
V
I
N
G
D
I
R
E
C
T
I
O
N
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
 
'
H
A
I
R
P
O
R
T
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
A
I
R
P
O
R
T
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
A
I
R
P
O
R
T
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
 
'
H
O
T
H
E
R
T
R
A
N
S
P
O
R
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
H
E
A
D
E
R
_
O
T
H
E
R
T
R
A
N
S
P
O
R
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
H
E
A
D
E
R
_
O
T
H
E
R
T
R
A
N
S
P
O
R
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
 
'
H
P
O
L
I
C
I
E
S
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
P
O
L
I
C
I
E
S
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
P
O
L
I
C
I
E
S
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
 
'
_
J
O
M
R
E
S
_
M
E
T
A
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
M
E
T
A
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
M
E
T
A
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
M
E
T
A
K
E
Y
W
O
R
D
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
M
E
T
A
K
E
Y
W
O
R
D
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
M
E
T
A
K
E
Y
W
O
R
D
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
_
J
O
M
R
E
S
_
M
E
T
A
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
M
E
T
A
T
I
T
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
M
E
T
A
T
I
T
L
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
L
A
T
L
O
N
G
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
L
A
T
L
O
N
G
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
L
A
T
L
O
N
G
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
L
A
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
L
A
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
L
A
T
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
L
O
N
G
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
L
O
N
G
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
L
O
N
G
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
_
J
O
M
R
E
S
_
P
E
R
M
I
T
_
N
U
M
B
E
R
_
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
P
E
R
M
I
T
_
N
U
M
B
E
R
_
T
I
T
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
P
E
R
M
I
T
_
N
U
M
B
E
R
_
T
I
T
L
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
_
J
O
M
R
E
S
_
P
E
R
M
I
T
_
N
U
M
B
E
R
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
P
E
R
M
I
T
_
N
U
M
B
E
R
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
P
E
R
M
I
T
_
N
U
M
B
E
R
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
T
Y
P
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
_
W
A
R
N
I
N
G
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
P
T
Y
P
E
_
C
H
A
N
G
E
_
W
A
R
N
I
N
G
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
P
T
Y
P
E
_
C
H
A
N
G
E
_
W
A
R
N
I
N
G
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
l
i
m
i
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
c
o
u
n
t
r
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

 
 
 
 
 
 
 
 
 
 
 
 
$
c
h
a
n
g
e
_
c
o
u
n
t
r
y
_
w
a
r
n
i
n
g
[
]
 
=
 
a
r
r
a
y
(
'
C
H
A
N
G
E
C
O
U
N
T
R
Y
W
A
R
N
I
N
G
'
 
=
>
 
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
E
D
I
T
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
C
O
U
N
T
R
Y
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
E
D
I
T
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
C
O
U
N
T
R
Y
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
}


	
	
$
s
t
a
r
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

	
	
i
f
 
(
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
t
y
p
e
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
t
y
p
e
s
[
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
t
y
p
e
_
i
d
]
[
'
h
a
s
_
s
t
a
r
s
'
]
 
=
=
 
1
)
 
{

	
	
	
$
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

	
	
	

	
	
	
$
s
[
 
'
H
S
T
A
R
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
S
T
A
R
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
S
T
A
R
S
'
)
;

	
	
	
/
/
s
t
a
r
s
 
d
r
o
p
d
o
w
n

	
	
	
f
o
r
 
(
$
i
 
=
 
0
,
 
$
n
 
=
 
7
;
 
$
i
 
<
=
 
$
n
;
 
+
+
$
i
)
 
{

	
	
	
	
$
s
t
a
r
s
_
a
r
r
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
i
,
 
$
i
)
;

	
	
	
}

	
	
	
$
s
[
 
'
S
T
A
R
S
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
s
t
a
r
s
_
a
r
r
,
 
'
s
t
a
r
s
'
,
 
'
s
i
z
e
=
"
1
"
 
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
s
t
a
r
s
)
;


	
	
	
/
/
s
u
p
e
r
i
o
r
 
d
r
o
p
d
o
w
n

	
	
	
$
y
e
s
n
o
 
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
y
e
s
n
o
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
'
0
'
,
 
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
,
 
f
a
l
s
e
)
)
;

	
	
	
$
y
e
s
n
o
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
'
1
'
,
 
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
,
 
f
a
l
s
e
)
)
;

	
	
	
$
s
[
 
'
S
U
P
E
R
I
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
y
e
s
n
o
,
 
'
s
u
p
e
r
i
o
r
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
s
u
p
e
r
i
o
r
)
;

	
	
	
$
s
[
 
'
H
S
U
P
E
R
I
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
J
O
M
R
E
S
_
S
U
P
E
R
I
O
R
'
,
 
'
J
O
M
R
E
S
_
S
U
P
E
R
I
O
R
'
)
;

	
	
	

	
	
	
$
s
t
a
r
s
[
]
 
=
 
$
s
;

	
	
}

	
	

 
 
 
 
 
 
 
 
/
/
t
o
o
l
b
a
r

 
 
 
 
 
 
 
 
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
)
,
 
'
'
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
 
!
=
 
'
2
'
 
&
&
 
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
 
!
=
 
'
3
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
 
'
'
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
p
r
o
p
e
r
t
y
'
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
C
A
N
C
E
L
_
U
R
L
'
 
]
 
=
 
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
c
p
a
n
e
l
'
)
;


 
 
 
 
 
 
 
 
/
/
a
p
p
r
o
v
a
l
 
w
a
r
n
i
n
g

 
 
 
 
 
 
 
 
$
a
p
p
r
o
v
a
l
_
w
a
r
n
i
n
g
[
]
 
=
 
a
r
r
a
y
(
'
A
P
P
R
O
V
A
L
W
A
R
N
I
N
G
'
 
=
>
 
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
E
D
I
T
P
R
O
P
E
R
T
Y
_
A
P
P
R
O
V
A
L
_
W
A
R
N
I
N
G
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
E
D
I
T
P
R
O
P
E
R
T
Y
_
A
P
P
R
O
V
A
L
_
W
A
R
N
I
N
G
'
,
 
f
a
l
s
e
)
)
;


 
 
 
 
 
 
 
 
/
/
d
i
s
p
l
a
y
 
t
e
m
p
l
a
t
e

 
 
 
 
 
 
 
 
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
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
'
 
]
 
=
=
 
1
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
e
d
i
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
r
e
a
l
e
s
t
a
t
e
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
e
d
i
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
c
h
a
n
g
e
_
c
o
u
n
t
r
y
_
w
a
r
n
i
n
g
'
,
 
$
c
h
a
n
g
e
_
c
o
u
n
t
r
y
_
w
a
r
n
i
n
g
)
;


 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
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
u
t
o
m
a
t
i
c
a
l
l
y
_
a
p
p
r
o
v
e
_
n
e
w
_
p
r
o
p
e
r
t
i
e
s
'
]
 
=
=
 
0
 
&
&
 
!
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
s
u
p
e
r
P
r
o
p
e
r
t
y
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
a
p
p
r
o
v
a
l
_
w
a
r
n
i
n
g
'
,
 
$
a
p
p
r
o
v
a
l
_
w
a
r
n
i
n
g
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
m
u
l
t
i
'
,
 
$
m
u
l
t
i
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
u
s
e
G
l
o
b
a
l
P
F
e
a
t
u
r
e
s
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
g
l
o
b
a
l
P
f
e
a
t
u
r
e
s
'
,
 
$
g
l
o
b
a
l
P
f
e
a
t
u
r
e
s
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
s
t
a
r
s
'
,
 
$
s
t
a
r
s
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
P
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
F
R
O
N
T
_
P
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
C
O
U
N
T
R
Y
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
C
O
U
N
T
R
Y
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
R
E
G
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
H
E
A
D
E
R
_
R
E
G
I
O
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
P
R
O
P
E
R
T
Y
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
S
T
R
E
E
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
H
E
A
D
E
R
_
S
T
R
E
E
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
H
E
A
D
E
R
_
T
O
W
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
H
E
A
D
E
R
_
T
O
W
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
H
E
A
D
E
R
_
P
O
S
T
C
O
D
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
P
O
S
T
C
O
D
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
T
E
L
E
P
H
O
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
H
E
A
D
E
R
_
T
E
L
E
P
H
O
N
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
F
A
X
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
F
A
X
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
E
M
A
I
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
H
E
A
D
E
R
_
E
M
A
I
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
H
E
A
D
E
R
_
S
T
A
R
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
S
T
A
R
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
P
R
O
P
E
R
T
Y
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
H
E
A
D
E
R
_
P
R
O
P
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
H
E
A
D
E
R
_
P
R
O
P
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
C
H
E
C
K
I
N
T
I
M
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
C
H
E
C
K
I
N
T
I
M
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
H
E
A
D
E
R
_
A
R
E
A
A
C
T
I
V
I
T
I
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
A
R
E
A
A
C
T
I
V
I
T
I
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
H
E
A
D
E
R
_
D
R
I
V
I
N
G
D
I
R
E
C
T
I
O
N
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
D
R
I
V
I
N
G
D
I
R
E
C
T
I
O
N
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
H
E
A
D
E
R
_
A
I
R
P
O
R
T
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
A
I
R
P
O
R
T
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
H
E
A
D
E
R
_
O
T
H
E
R
T
R
A
N
S
P
O
R
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
H
E
A
D
E
R
_
O
T
H
E
R
T
R
A
N
S
P
O
R
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
H
E
A
D
E
R
_
P
O
L
I
C
I
E
S
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
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
P
O
L
I
C
I
E
S
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
E
D
I
T
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
C
O
U
N
T
R
Y
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
E
D
I
T
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
C
O
U
N
T
R
Y
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
E
D
I
T
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
A
V
E
B
E
F
O
R
E
U
P
L
O
A
D
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
E
D
I
T
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
A
V
E
B
E
F
O
R
E
U
P
L
O
A
D
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
E
D
I
T
P
R
O
P
E
R
T
Y
_
C
O
N
N
O
T
D
E
L
E
T
E
1
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
E
D
I
T
P
R
O
P
E
R
T
Y
_
C
O
N
N
O
T
D
E
L
E
T
E
1
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
L
A
T
L
O
N
G
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
L
A
T
L
O
N
G
_
D
E
S
C
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

