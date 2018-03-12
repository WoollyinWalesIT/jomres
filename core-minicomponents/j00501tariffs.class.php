
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
5
0
1
t
a
r
i
f
f
s

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

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
 
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
'
 
]
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
l
i
s
t
s
 
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
l
i
s
t
s
'
 
]
;

 
 
 
 
 
 
 
 
$
t
a
r
i
f
f
M
o
d
e
l
s
D
r
o
p
d
o
w
n
 
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
a
r
i
f
f
M
o
d
e
l
s
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
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
o
u
t
p
u
t
C
o
n
v
e
r
s
i
o
n
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
(
)
;

 
 
 
 
 
 
 
 
$
c
u
r
r
f
m
t
 
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
u
r
r
e
n
c
y
_
f
o
r
m
a
t
'
)
;

 
 
 
 
 
 
 
 
$
c
f
o
r
m
a
t
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
c
u
r
r
f
m
t
-
>
g
e
t
_
c
u
r
r
e
n
c
y
_
f
o
r
m
a
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
i
n
p
u
t
(
)
;


 
 
 
 
 
 
 
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
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
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
'
)
;


 
 
 
 
 
 
 
 
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
m
a
r
g
i
n
'
 
]
)
 
|
|
 
e
m
p
t
y
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
m
a
r
g
i
n
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
m
a
r
g
i
n
'
 
]
 
=
 
'
0
.
0
0
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
t
a
r
t
P
a
n
e
l
(
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
T
A
R
I
F
F
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
A
_
T
A
R
I
F
F
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
 
0
 
&
&
 
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
i
s
_
j
i
n
t
o
u
r
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
t
a
r
i
f
f
m
o
d
e
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
T
A
R
I
F
F
P
R
I
C
E
S
A
R
E
W
E
E
K
L
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
A
_
T
A
R
I
F
F
P
R
I
C
E
S
A
R
E
W
E
E
K
L
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
t
a
r
i
f
f
C
h
a
r
g
e
s
S
t
o
r
e
d
W
e
e
k
l
y
Y
e
s
N
o
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
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
T
A
R
I
F
F
P
R
I
C
E
S
A
R
E
W
E
E
K
L
Y
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
A
_
T
A
R
I
F
F
P
R
I
C
E
S
A
R
E
W
E
E
K
L
Y
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
u
s
e
G
l
o
b
a
l
C
u
r
r
e
n
c
y
'
 
]
 
!
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
u
r
r
e
n
c
y
c
o
d
e
'
 
]
)
)
 
{
 
/
/
 
f
o
r
 
v
4
.
5
 
c
o
n
v
e
r
t
i
n
g
 
t
h
e
 
o
l
d
 
c
u
r
r
e
n
c
y
C
o
d
e
 
v
a
l
u
e
 
t
o
 
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
u
r
r
e
n
c
y
c
o
d
e

 
 
 
 
 
 
 
 
 
 
 
 
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
u
r
r
e
n
c
y
c
o
d
e
'
 
]
 
=
 
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
c
u
r
r
e
n
c
y
C
o
d
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
c
y
_
c
o
d
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
c
u
r
r
e
n
c
y
_
c
o
d
e
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
c
y
_
c
o
d
e
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
 
$
c
u
r
r
e
n
c
y
_
c
o
d
e
s
-
>
m
a
k
e
C
o
d
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
u
r
r
e
n
c
y
c
o
d
e
'
 
]
)
;

	
	
	

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
U
R
R
E
N
C
Y
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
A
_
C
U
R
R
E
N
C
Y
C
O
D
E
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
c
u
r
r
e
n
c
y
_
c
o
d
e
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

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
T
A
R
I
F
F
S
_
S
W
A
P
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
T
A
R
I
F
F
S
_
S
W
A
P
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
c
u
r
r
e
n
c
y
_
s
y
m
b
o
l
_
s
w
a
p
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
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
T
A
R
I
F
F
S
_
S
W
A
P
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
A
_
T
A
R
I
F
F
S
_
S
W
A
P
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;

 
 
 
 
 
 
 
 
}


	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
R
R
E
N
C
Y
F
O
R
M
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
C
U
R
R
E
N
C
Y
F
O
R
M
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
)
;

	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
c
f
o
r
m
a
t
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
)
;

	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
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
 
0
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
i
s
_
j
i
n
t
o
u
r
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
)
 
{

	
	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
T
A
R
I
F
F
S
_
M
O
D
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
T
A
R
I
F
F
S
_
M
O
D
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
)
;

	
	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
t
a
r
i
f
f
M
o
d
e
l
s
D
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
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
T
A
R
I
F
F
S
_
M
O
D
E
L
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
A
_
T
A
R
I
F
F
S
_
M
O
D
E
L
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
)
;

	
	
	
	
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;

	
	
	
}


 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
T
A
X
_
R
A
T
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
I
N
V
O
I
C
E
S
_
L
I
N
E
I
T
E
M
S
_
T
A
X
_
R
A
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
m
a
k
e
T
a
x
r
a
t
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
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
c
o
d
e
'
 
]
,
 
'
c
f
g
_
a
c
c
o
m
m
o
d
a
t
i
o
n
_
t
a
x
_
c
o
d
e
'
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
T
A
X
I
N
C
L
U
S
I
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
A
_
T
A
X
I
N
C
L
U
S
I
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
p
r
i
c
e
s
_
i
n
c
l
u
s
i
v
e
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
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
T
A
X
I
N
C
L
U
S
I
V
E
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
A
_
T
A
X
I
N
C
L
U
S
I
V
E
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
[
'
0
0
0
0
5
'
]
[
'
g
u
e
s
t
_
t
y
p
e
s
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
T
A
R
I
F
F
S
_
P
E
R
_
W
H
O
L
E
D
A
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
A
_
T
A
R
I
F
F
S
_
P
E
R
_
W
H
O
L
E
D
A
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
p
e
r
P
e
r
s
o
n
P
e
r
N
i
g
h
t
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
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
T
A
R
I
F
F
S
_
P
E
R
_
D
E
S
C
_
W
H
O
L
E
D
A
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
A
_
T
A
R
I
F
F
S
_
P
E
R
_
D
E
S
C
_
W
H
O
L
E
D
A
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
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
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
T
A
R
I
F
F
S
_
P
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
A
_
T
A
R
I
F
F
S
_
P
E
R
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
$
l
i
s
t
s
[
 
'
p
e
r
P
e
r
s
o
n
P
e
r
N
i
g
h
t
'
 
]
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
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
T
A
R
I
F
F
S
_
P
E
R
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
A
_
T
A
R
I
F
F
S
_
P
E
R
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
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

	
	
	

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
l
e
f
t
(
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
P
O
A
_
D
I
S
P
L
A
Y
_
P
R
I
C
E
'
,
 
'
P
O
A
_
D
I
S
P
L
A
Y
_
P
R
I
C
E
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
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
m
i
d
d
l
e
(
 
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
t
e
x
t
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
 
 
s
i
z
e
=
"
5
"
 
n
a
m
e
=
"
c
f
g
_
p
o
a
_
p
r
i
c
e
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
p
o
a
_
p
r
i
c
e
'
 
]
.
'
"
 
/
>
'
 
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
s
e
t
r
i
g
h
t
(
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
P
O
A
_
D
I
S
P
L
A
Y
_
P
R
I
C
E
_
D
E
S
C
'
,
 
'
P
O
A
_
D
I
S
P
L
A
Y
_
P
R
I
C
E
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
)
;

 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
i
n
s
e
r
t
S
e
t
t
i
n
g
(
)
;

	
	
	

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
e
n
d
P
a
n
e
l
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
 
o
u
t
p
u
t
C
o
n
v
e
r
s
i
o
n
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
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
?
>

	
	
	
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

	
	
	
	
v
a
r
 
a
r
r
O
l
d
V
a
l
u
e
s
;


	
	
	
	
f
u
n
c
t
i
o
n
 
S
e
l
e
c
t
A
l
l
L
i
s
t
(
C
O
N
T
R
O
L
)
 
{

	
	
	
	
	
f
o
r
 
(
v
a
r
 
i
 
=
 
0
;
 
i
 
<
 
C
O
N
T
R
O
L
.
l
e
n
g
t
h
;
 
i
+
+
)
 
{

	
	
	
	
	
	
C
O
N
T
R
O
L
.
o
p
t
i
o
n
s
[
i
]
.
s
e
l
e
c
t
e
d
 
=
 
t
r
u
e
;

	
	
	
	
	
}

	
	
	
	
}


	
	
	
	
f
u
n
c
t
i
o
n
 
D
e
s
e
l
e
c
t
A
l
l
L
i
s
t
(
C
O
N
T
R
O
L
)
 
{

	
	
	
	
	
f
o
r
 
(
v
a
r
 
i
 
=
 
0
;
 
i
 
<
 
C
O
N
T
R
O
L
.
l
e
n
g
t
h
;
 
i
+
+
)
 
{

	
	
	
	
	
	
C
O
N
T
R
O
L
.
o
p
t
i
o
n
s
[
i
]
.
s
e
l
e
c
t
e
d
 
=
 
f
a
l
s
e
;

	
	
	
	
	
}

	
	
	
	
}


	
	
	
	
f
u
n
c
t
i
o
n
 
F
i
l
l
L
i
s
t
V
a
l
u
e
s
(
C
O
N
T
R
O
L
)
 
{

	
	
	
	
	
v
a
r
 
a
r
r
N
e
w
V
a
l
u
e
s
;

	
	
	
	
	
v
a
r
 
i
n
t
N
e
w
P
o
s
;

	
	
	
	
	
v
a
r
 
s
t
r
T
e
m
p
 
=
 
G
e
t
S
e
l
e
c
t
V
a
l
u
e
s
(
C
O
N
T
R
O
L
)
;

	
	
	
	
	
a
r
r
N
e
w
V
a
l
u
e
s
 
=
 
s
t
r
T
e
m
p
.
s
p
l
i
t
(
"
,
"
)
;

	
	
	
	
	
f
o
r
 
(
v
a
r
 
i
 
=
 
0
;
 
i
 
<
 
a
r
r
N
e
w
V
a
l
u
e
s
.
l
e
n
g
t
h
 
-
 
1
;
 
i
+
+
)
 
{

	
	
	
	
	
	
i
f
 
(
a
r
r
N
e
w
V
a
l
u
e
s
[
i
]
 
=
=
 
1
)
 
{

	
	
	
	
	
	
	
i
n
t
N
e
w
P
o
s
 
=
 
i
;

	
	
	
	
	
	
}

	
	
	
	
	
}


	
	
	
	
	
f
o
r
 
(
v
a
r
 
i
 
=
 
0
;
 
i
 
<
 
a
r
r
O
l
d
V
a
l
u
e
s
.
l
e
n
g
t
h
 
-
 
1
;
 
i
+
+
)
 
{

	
	
	
	
	
	
i
f
 
(
a
r
r
O
l
d
V
a
l
u
e
s
[
i
]
 
=
=
 
1
 
&
&
 
i
 
!
=
 
i
n
t
N
e
w
P
o
s
)
 
{

	
	
	
	
	
	
	
C
O
N
T
R
O
L
.
o
p
t
i
o
n
s
[
i
]
.
s
e
l
e
c
t
e
d
 
=
 
t
r
u
e
;

	
	
	
	
	
	
}

	
	
	
	
	
	
e
l
s
e
 
i
f
 
(
a
r
r
O
l
d
V
a
l
u
e
s
[
i
]
 
=
=
 
0
 
&
&
 
i
 
!
=
 
i
n
t
N
e
w
P
o
s
)
 
{

	
	
	
	
	
	
	
C
O
N
T
R
O
L
.
o
p
t
i
o
n
s
[
i
]
.
s
e
l
e
c
t
e
d
 
=
 
f
a
l
s
e
;

	
	
	
	
	
	
}

	
	
	
	
	
	
i
f
 
(
a
r
r
O
l
d
V
a
l
u
e
s
[
i
n
t
N
e
w
P
o
s
]
 
=
=
 
1
)
 
{

	
	
	
	
	
	
	
C
O
N
T
R
O
L
.
o
p
t
i
o
n
s
[
i
n
t
N
e
w
P
o
s
]
.
s
e
l
e
c
t
e
d
 
=
 
f
a
l
s
e
;

	
	
	
	
	
	
}

	
	
	
	
	
	
e
l
s
e
 
{

	
	
	
	
	
	
	
C
O
N
T
R
O
L
.
o
p
t
i
o
n
s
[
i
n
t
N
e
w
P
o
s
]
.
s
e
l
e
c
t
e
d
 
=
 
t
r
u
e
;

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
}


	
	
	
	
f
u
n
c
t
i
o
n
 
G
e
t
S
e
l
e
c
t
V
a
l
u
e
s
(
C
O
N
T
R
O
L
)
 
{

	
	
	
	
	
v
a
r
 
s
t
r
T
e
m
p
 
=
 
"
"
;

	
	
	
	
	
f
o
r
 
(
v
a
r
 
i
 
=
 
0
;
 
i
 
<
 
C
O
N
T
R
O
L
.
l
e
n
g
t
h
;
 
i
+
+
)
 
{

	
	
	
	
	
	
i
f
 
(
C
O
N
T
R
O
L
.
o
p
t
i
o
n
s
[
i
]
.
s
e
l
e
c
t
e
d
 
=
=
 
t
r
u
e
)
 
{

	
	
	
	
	
	
	
s
t
r
T
e
m
p
 
+
=
 
"
1
,
"
;

	
	
	
	
	
	
}

	
	
	
	
	
	
e
l
s
e
 
{

	
	
	
	
	
	
	
s
t
r
T
e
m
p
 
+
=
 
"
0
,
"
;

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
	
r
e
t
u
r
n
 
s
t
r
T
e
m
p
;

	
	
	
	
}


	
	
	
	
f
u
n
c
t
i
o
n
 
G
e
t
C
u
r
r
e
n
t
L
i
s
t
V
a
l
u
e
s
(
C
O
N
T
R
O
L
)
 
{

	
	
	
	
	
v
a
r
 
s
t
r
V
a
l
u
e
s
 
=
 
"
"
;

	
	
	
	
	
s
t
r
V
a
l
u
e
s
 
=
 
G
e
t
S
e
l
e
c
t
V
a
l
u
e
s
(
C
O
N
T
R
O
L
)
;

	
	
	
	
	
a
r
r
O
l
d
V
a
l
u
e
s
 
=
 
s
t
r
V
a
l
u
e
s
.
s
p
l
i
t
(
"
,
"
)

	
	
	
	
}

	
	
	
<
/
s
c
r
i
p
t
>

	
	
<
?
p
h
p


 
 
 
 
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

