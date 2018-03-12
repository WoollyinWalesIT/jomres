
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
t
i
p
s

{

	
p
r
i
v
a
t
e
 
s
t
a
t
i
c
 
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;


 
 
 
 
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
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
i
v
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

 
 
 
 
}

	

	
p
u
b
l
i
c
 
s
t
a
t
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
I
n
s
t
a
n
c
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
 
=
 
n
e
w
 
s
e
l
f
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
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
 
g
e
n
e
r
a
t
e
_
t
o
o
l
t
i
p
(
$
d
i
v
,
 
$
h
o
v
e
r
_
t
i
t
l
e
,
 
$
h
o
v
e
r
_
c
o
n
t
e
n
t
,
 
$
d
i
v
_
c
o
n
t
e
n
t
,
 
$
c
l
a
s
s
,
 
$
t
y
p
e
,
 
$
t
y
p
e
_
a
r
g
u
m
e
n
t
s
,
 
$
u
r
l
 
=
 
'
#
'
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
h
o
v
e
r
_
c
o
n
t
e
n
t
 
=
 
f
i
l
t
e
r
_
v
a
r
(
$
h
o
v
e
r
_
c
o
n
t
e
n
t
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
S
P
E
C
I
A
L
_
C
H
A
R
S
)
;

 
 
 
 
 
 
 
 
$
k
e
e
p
l
o
o
k
i
n
g
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
$
b
e
a
u
t
y
T
i
p
_
o
p
a
c
i
t
y
 
=
 
.
9
;

 
 
 
 
 
 
 
 
/
/
 
J
u
s
t
 
i
n
 
t
h
e
 
o
f
f
-
c
h
a
n
c
e
 
t
h
a
t
 
w
e
 
s
u
p
p
l
y
 
t
h
e
 
s
a
m
e
 
d
i
v
 
n
a
m
e
 
t
w
i
c
e

 
 
 
 
 
 
 
 
/
/
$
d
i
v
=
"
j
r
T
o
o
l
t
i
p
"
.
p
r
e
g
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
/
[
^
A
-
Z
a
-
z
0
-
9
_
-
]
+
/
'
,
 
"
"
,
 
$
d
i
v
)
;

 
 
 
 
 
 
 
 
$
d
i
v
 
=
 
g
e
n
e
r
a
t
e
J
o
m
r
e
s
R
a
n
d
o
m
S
t
r
i
n
g
(
1
0
)
;

 
 
 
 
 
 
 
 
w
h
i
l
e
 
(
$
k
e
e
p
l
o
o
k
i
n
g
)
:

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
$
d
i
v
,
 
$
t
h
i
s
-
>
d
i
v
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
k
e
e
p
l
o
o
k
i
n
g
 
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
v
 
=
 
$
d
i
v
.
m
t
_
r
a
n
d
(
1
0
0
0
0
0
0
0
,
 
9
9
9
9
9
9
9
9
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
e
n
d
w
h
i
l
e
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
i
v
s
[
 
$
d
i
v
 
]
 
=
 
$
d
i
v
;


 
 
 
 
 
 
 
 
$
d
i
v
_
s
t
r
i
n
g
 
=
 
'
'
;


 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
t
y
p
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
a
j
a
x
p
a
g
e
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
r
l
 
=
 
$
t
y
p
e
_
a
r
g
u
m
e
n
t
s
[
 
'
u
r
l
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
T
I
T
L
E
'
 
]
 
=
 
$
d
i
v
_
c
o
n
t
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
d
i
v
_
c
o
n
t
e
n
t
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
o
l
t
i
p
_
a
j
a
x
p
a
g
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
d
i
v
_
s
t
r
i
n
g
 
=
 
$
t
m
p
l
-
>
g
e
t
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
i
n
f
o
i
m
a
g
e
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
T
I
T
L
E
'
 
]
 
=
 
$
h
o
v
e
r
_
c
o
n
t
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
I
M
A
G
E
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
S
y
m
b
o
l
I
n
f
o
r
m
a
t
i
o
n
.
p
n
g
'
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
o
l
t
i
p
_
i
n
f
o
i
m
a
g
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
d
i
v
_
s
t
r
i
n
g
 
=
 
$
t
m
p
l
-
>
g
e
t
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


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
w
a
r
n
i
n
g
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
T
H
U
M
B
N
A
I
L
'
 
]
 
=
 
$
i
m
a
g
e
t
h
u
m
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
 
$
h
o
v
e
r
_
c
o
n
t
e
n
t
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
o
l
t
i
p
_
w
a
r
n
i
n
g
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
d
i
v
_
s
t
r
i
n
g
 
=
 
$
t
m
p
l
-
>
g
e
t
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


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
i
m
a
g
e
o
n
l
y
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
a
g
e
t
h
u
m
b
 
=
 
f
a
l
s
e
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
t
y
p
e
_
a
r
g
u
m
e
n
t
s
[
 
'
i
m
a
g
e
t
h
u
m
b
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
i
m
a
g
e
t
h
u
m
b
 
=
 
$
t
y
p
e
_
a
r
g
u
m
e
n
t
s
[
 
'
i
m
a
g
e
t
h
u
m
b
'
 
]
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
T
H
U
M
B
N
A
I
L
'
 
]
 
=
 
$
i
m
a
g
e
t
h
u
m
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
I
M
A
G
E
'
 
]
 
=
 
$
h
o
v
e
r
_
c
o
n
t
e
n
t
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
o
l
t
i
p
_
i
m
a
g
e
o
n
l
y
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
d
i
v
_
s
t
r
i
n
g
 
=
 
$
t
m
p
l
-
>
g
e
t
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
r
o
o
m
_
t
y
p
e
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
t
y
p
e
_
a
r
g
u
m
e
n
t
s
[
 
'
u
s
e
_
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
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
y
p
e
_
a
r
g
u
m
e
n
t
s
[
 
'
u
s
e
_
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
 
]
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
_
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
 
=
 
$
t
y
p
e
_
a
r
g
u
m
e
n
t
s
[
 
'
u
s
e
_
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
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
u
s
e
_
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
U
R
L
'
 
]
 
=
 
$
u
r
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
T
I
T
L
E
'
 
]
 
=
 
$
h
o
v
e
r
_
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
h
o
v
e
r
_
c
o
n
t
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
I
M
A
G
E
'
 
]
 
=
 
$
d
i
v
_
c
o
n
t
e
n
t
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
o
l
t
i
p
_
r
o
o
m
_
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
d
i
v
_
s
t
r
i
n
g
 
=
 
$
t
m
p
l
-
>
g
e
t
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
v
_
s
t
r
i
n
g
 
.
=
 
'
<
d
i
v
 
i
d
=
"
'
.
$
d
i
v
.
'
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
l
e
n
(
$
c
l
a
s
s
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
v
_
s
t
r
i
n
g
 
.
=
 
'
 
c
l
a
s
s
=
"
'
.
$
c
l
a
s
s
.
'
"
 
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
v
_
s
t
r
i
n
g
 
.
=
 
'
 
c
l
a
s
s
=
"
j
o
m
r
e
s
_
b
t
_
t
o
o
l
t
i
p
_
f
e
a
t
u
r
e
s
"
 
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
v
_
s
t
r
i
n
g
 
.
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
$
d
i
v
_
c
o
n
t
e
n
t
.
'
"
 
/
>
<
b
>
'
.
$
h
o
v
e
r
_
t
i
t
l
e
.
'
<
/
b
>
<
/
d
i
v
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
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
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
t
y
p
e
_
a
r
g
u
m
e
n
t
s
[
 
'
u
s
e
_
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
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
y
p
e
_
a
r
g
u
m
e
n
t
s
[
 
'
u
s
e
_
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
 
]
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
_
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
 
=
 
$
t
y
p
e
_
a
r
g
u
m
e
n
t
s
[
 
'
u
s
e
_
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
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
u
s
e
_
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
U
R
L
'
 
]
 
=
 
$
u
r
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
T
I
T
L
E
'
 
]
 
=
 
$
h
o
v
e
r
_
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
h
o
v
e
r
_
c
o
n
t
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
I
M
A
G
E
'
 
]
 
=
 
$
d
i
v
_
c
o
n
t
e
n
t
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
o
l
t
i
p
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
d
i
v
_
s
t
r
i
n
g
 
=
 
$
t
m
p
l
-
>
g
e
t
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
v
_
s
t
r
i
n
g
 
.
=
 
'
<
d
i
v
 
i
d
=
"
'
.
$
d
i
v
.
'
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
l
e
n
(
$
c
l
a
s
s
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
v
_
s
t
r
i
n
g
 
.
=
 
'
 
c
l
a
s
s
=
"
'
.
$
c
l
a
s
s
.
'
"
 
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
v
_
s
t
r
i
n
g
 
.
=
 
'
 
c
l
a
s
s
=
"
j
o
m
r
e
s
_
b
t
_
t
o
o
l
t
i
p
_
f
e
a
t
u
r
e
s
"
 
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
v
_
s
t
r
i
n
g
 
.
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
$
d
i
v
_
c
o
n
t
e
n
t
.
'
"
 
/
>
<
b
>
'
.
$
h
o
v
e
r
_
t
i
t
l
e
.
'
<
/
b
>
<
/
d
i
v
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
d
a
s
h
b
o
a
r
d
_
t
o
o
l
t
i
p
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
t
y
p
e
_
a
r
g
u
m
e
n
t
s
[
 
'
u
s
e
_
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
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
y
p
e
_
a
r
g
u
m
e
n
t
s
[
 
'
u
s
e
_
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
 
]
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
_
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
 
=
 
$
t
y
p
e
_
a
r
g
u
m
e
n
t
s
[
 
'
u
s
e
_
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
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
u
s
e
_
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
T
E
X
T
'
 
]
 
=
 
$
d
i
v
_
c
o
n
t
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
C
O
N
T
E
N
T
'
 
]
 
=
 
$
h
o
v
e
r
_
c
o
n
t
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
U
R
L
'
 
]
 
=
 
$
u
r
l
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
o
l
t
i
p
_
d
a
s
h
b
o
a
r
d
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
d
i
v
_
s
t
r
i
n
g
 
=
 
$
t
m
p
l
-
>
g
e
t
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
v
_
s
t
r
i
n
g
 
.
=
 
'
<
d
i
v
 
i
d
=
"
'
.
$
d
i
v
.
'
"
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
l
e
n
(
$
c
l
a
s
s
)
 
>
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
v
_
s
t
r
i
n
g
 
.
=
 
'
 
c
l
a
s
s
=
"
'
.
$
c
l
a
s
s
.
'
"
 
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
v
_
s
t
r
i
n
g
 
.
=
 
'
 
c
l
a
s
s
=
"
j
o
m
r
e
s
_
b
t
_
t
o
o
l
t
i
p
_
f
e
a
t
u
r
e
s
"
 
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
i
v
_
s
t
r
i
n
g
 
.
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
$
d
i
v
_
c
o
n
t
e
n
t
.
'
"
 
/
>
<
b
>
'
.
$
h
o
v
e
r
_
t
i
t
l
e
.
'
<
/
b
>
<
/
d
i
v
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
T
E
X
T
'
 
]
 
=
 
$
d
i
v
_
c
o
n
t
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
C
O
N
T
E
N
T
'
 
]
 
=
 
$
h
o
v
e
r
_
c
o
n
t
e
n
t
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
o
l
t
i
p
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
d
i
v
_
s
t
r
i
n
g
 
=
 
$
t
m
p
l
-
>
g
e
t
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
d
i
v
_
s
t
r
i
n
g
;

 
 
 
 
}


 
 
 
 
/
*

 
 
 
 
 
 
 
 
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
_
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
(
$
d
i
v
)

 
 
 
 
 
 
 
 
 
 
 
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
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
=
"
<
s
c
r
i
p
t
>
"
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
c
o
u
n
t
(
$
t
h
i
s
-
>
d
i
v
s
)
>
0
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
d
i
v
s
 
a
s
 
$
d
i
v
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
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
.
=
"
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
"
.
$
d
i
v
[
'
i
d
'
]
.
"
'
)
.
b
t
(
)
;
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
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
.
=
"
<
/
s
c
r
i
p
t
>
"
;

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
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
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
*
/

}

