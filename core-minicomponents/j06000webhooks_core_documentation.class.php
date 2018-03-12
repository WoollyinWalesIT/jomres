
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
0
w
e
b
h
o
o
k
s
_
c
o
r
e
_
d
o
c
u
m
e
n
t
a
t
i
o
n

	
{

	
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
)

	
	
{

	
	
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

	
	
	
$
t
h
i
s
-
>
s
h
o
r
t
c
o
d
e
_
d
a
t
a
 
=
 
a
r
r
a
y
 
(

	
	
	
	
"
t
a
s
k
"
 
=
>
 
"
w
e
b
h
o
o
k
s
_
c
o
r
e
_
d
o
c
u
m
e
n
t
a
t
i
o
n
"
,

	
	
	
	
"
i
n
f
o
"
 
=
>
 
"
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
0
W
E
B
H
O
O
K
S
_
D
O
C
S
"
,

	
	
	
	
"
a
r
g
u
m
e
n
t
s
"
 
=
>
 
a
r
r
a
y
 
(
)

	
	
	
	
)
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
e
P
o
i
n
t
F
i
l
e
p
a
t
h
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
e
P
o
i
n
t
F
i
l
e
p
a
t
h
'
)
;

 
 
 
 
 
 
 
 

	
	
$
e
P
o
i
n
t
L
i
v
e
S
i
t
e
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
e
L
i
v
e
S
i
t
e
'
)
.
"
/
t
e
m
p
l
a
t
e
s
/
"
.
f
i
n
d
_
p
l
u
g
i
n
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
d
i
r
e
c
t
o
r
y
(
)
.
"
/
"
;

	
	
$
p
a
t
h
 
=
 
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
o
u
t
p
u
t
[
'
E
P
O
I
N
T
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
 
$
e
P
o
i
n
t
L
i
v
e
S
i
t
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
C
O
N
T
E
N
T
S
'
]
 
=
 
f
i
l
e
_
g
e
t
_
c
o
n
t
e
n
t
s
(
$
p
a
t
h
.
J
R
D
S
.
"
w
e
b
h
o
o
k
_
a
p
i
_
d
o
c
u
m
e
n
t
a
t
i
o
n
_
c
o
n
t
e
n
t
s
.
h
t
m
l
"
)
;

	
	
$
m
e
t
h
o
d
s
 
=
 
 
f
i
l
e
_
g
e
t
_
c
o
n
t
e
n
t
s
(
$
p
a
t
h
.
J
R
D
S
.
"
w
e
b
h
o
o
k
_
a
p
i
_
d
o
c
.
h
t
m
l
"
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
C
O
N
T
E
N
T
S
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
 
"
[
M
E
T
H
O
D
S
]
"
 
,
$
m
e
t
h
o
d
s
 
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
C
O
N
T
E
N
T
S
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
C
O
N
T
E
N
T
S
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
 
"
[
L
I
V
E
_
S
I
T
E
]
"
 
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
"
l
i
v
e
_
s
i
t
e
"
)
 
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
C
O
N
T
E
N
T
S
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
S
I
D
E
B
A
R
'
]
 
=
 
f
i
l
e
_
g
e
t
_
c
o
n
t
e
n
t
s
(
$
p
a
t
h
.
J
R
D
S
.
"
w
e
b
h
o
o
k
_
a
p
i
_
d
o
c
u
m
e
n
t
a
t
i
o
n
_
s
i
d
e
b
a
r
.
h
t
m
l
"
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
 
$
p
a
t
h
 
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
w
e
b
h
o
o
k
_
a
p
i
_
d
o
c
u
m
e
n
t
a
t
i
o
n
_
i
n
d
e
x
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
