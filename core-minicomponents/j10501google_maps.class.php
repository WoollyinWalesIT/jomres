
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
1
0
5
0
1
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
m
a
p
_
s
t
y
l
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
m
a
p
_
s
t
y
l
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
'
 
]
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
J
O
M
R
E
S
_
G
O
O
G
L
E
_
M
A
P
S
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
G
O
O
G
L
E
_
M
A
P
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
H
e
a
d
i
n
g
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
J
O
M
R
E
S
_
G
O
O
G
L
E
_
M
A
P
S
_
P
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
J
O
M
R
E
S
_
G
O
O
G
L
E
_
M
A
P
S
_
P
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
M
A
P
_
M
A
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
M
A
P
_
M
A
P
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
m
a
p
_
t
y
p
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
J
O
M
R
E
S
_
G
O
O
G
L
E
_
M
A
P
_
S
T
Y
L
E
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
G
O
O
G
L
E
_
M
A
P
_
S
T
Y
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
m
a
p
_
s
t
y
l
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
M
A
P
_
Z
O
O
M
L
E
V
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
A
P
_
Z
O
O
M
L
E
V
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
l
i
s
t
s
[
'
m
a
p
_
z
o
o
m
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
D
E
F
A
U
L
T
_
L
A
T
_
S
T
A
R
T
P
O
I
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
D
E
F
A
U
L
T
_
L
A
T
_
S
T
A
R
T
P
O
I
N
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
-
l
a
r
g
e
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
_
J
O
M
R
E
S
_
D
E
F
A
U
L
T
_
L
A
T
L
O
N
G
S
T
A
R
T
P
O
I
N
T
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
D
E
F
A
U
L
T
_
L
A
T
L
O
N
G
S
T
A
R
T
P
O
I
N
T
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
D
E
F
A
U
L
T
_
L
O
N
G
_
S
T
A
R
T
P
O
I
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
D
E
F
A
U
L
T
_
L
O
N
G
_
S
T
A
R
T
P
O
I
N
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
-
l
a
r
g
e
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
J
O
M
R
E
S
_
G
O
O
G
L
E
_
M
A
P
S
_
P
O
I
S
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
G
O
O
G
L
E
_
M
A
P
S
_
P
O
I
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
g
m
a
p
_
p
o
i
s
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
J
O
M
R
E
S
_
G
O
O
G
L
E
_
M
A
P
_
O
P
T
I
O
N
_
T
R
A
N
S
I
T
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
G
O
O
G
L
E
_
M
A
P
_
O
P
T
I
O
N
_
T
R
A
N
S
I
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
l
i
s
t
s
[
 
'
g
m
a
p
_
l
a
y
e
r
_
t
r
a
n
s
i
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
M
A
P
_
H
E
I
G
H
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
M
A
P
_
H
E
I
G
H
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
-
l
a
r
g
e
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
m
a
p
_
h
e
i
g
h
t
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
m
a
p
_
h
e
i
g
h
t
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

	
	

	
	
/
/
p
l
u
g
i
n
s
 
c
a
n
 
a
d
d
 
o
p
t
i
o
n
s
 
t
o
 
t
h
i
s
 
t
a
b

	
	
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
r
i
g
g
e
r
E
v
e
n
t
(
'
1
0
5
2
5
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

