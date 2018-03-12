
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
a
_
m
i
s
c

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
b
o
o
t
s
t
r
a
p
_
v
e
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
b
o
o
t
s
t
r
a
p
_
v
e
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
 
]
;

 
 
 
 
 
 
 
 
$
j
q
u
e
r
y
U
I
t
h
e
m
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
L
i
s
t
 
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
j
q
u
e
r
y
U
I
t
h
e
m
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
L
i
s
t
'
 
]
;

 
 
 
 
 
 
 
 
$
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
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
a
n
g
u
a
g
e
_
c
o
n
t
e
x
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
'
 
]
;

	
	
$
n
a
v
b
a
r
_
l
o
c
a
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
n
a
v
b
a
r
_
l
o
c
a
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
'
 
]
;

 
 
 
 
 
 
 
 
$
s
u
p
p
o
r
t
_
k
e
y
_
i
s
_
t
r
i
a
l
_
l
i
c
e
n
s
e
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
r
e
n
e
w
a
l
_
l
i
n
k
 
=
 
'
'
;

	
	

	
	
$
j
o
m
r
e
s
_
c
h
e
c
k
_
s
u
p
p
o
r
t
_
k
e
y
 
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
h
e
c
k
_
s
u
p
p
o
r
t
_
k
e
y
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
c
h
e
c
k
_
s
u
p
p
o
r
t
_
k
e
y
-
>
c
h
e
c
k
_
l
i
c
e
n
s
e
_
k
e
y
(
t
r
u
e
)
;


 
 
 
 
 
 
 
 
i
f
 
(
t
r
i
m
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
c
e
n
s
e
k
e
y
'
]
)
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
c
h
e
c
k
_
s
u
p
p
o
r
t
_
k
e
y
-
>
k
e
y
_
v
a
l
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
c
h
e
c
k
_
s
u
p
p
o
r
t
_
k
e
y
-
>
a
l
l
o
w
s
_
p
l
u
g
i
n
s
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
p
p
o
r
t
_
k
e
y
_
m
e
s
s
a
g
e
 
=
 
'
<
p
 
c
l
a
s
s
=
"
a
l
e
r
t
 
a
l
e
r
t
-
s
u
c
c
e
s
s
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
S
U
P
P
O
R
T
K
E
Y
_
D
E
S
C
_
V
A
L
I
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
S
U
P
P
O
R
T
K
E
Y
_
D
E
S
C
_
V
A
L
I
D
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
.
'
<
/
p
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
s
u
p
p
o
r
t
_
k
e
y
_
m
e
s
s
a
g
e
 
=
 
'
<
p
 
c
l
a
s
s
=
"
a
l
e
r
t
 
a
l
e
r
t
-
s
u
c
c
e
s
s
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
S
U
P
P
O
R
T
K
E
Y
_
D
E
S
C
_
V
A
L
I
D
_
N
O
_
P
L
U
G
I
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
S
U
P
P
O
R
T
K
E
Y
_
D
E
S
C
_
V
A
L
I
D
_
N
O
_
P
L
U
G
I
N
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
.
'
<
/
p
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
p
p
o
r
t
_
k
e
y
_
m
e
s
s
a
g
e
 
=
 
'
<
p
 
c
l
a
s
s
=
"
a
l
e
r
t
 
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
S
U
P
P
O
R
T
K
E
Y
_
D
E
S
C
_
I
N
V
A
L
I
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
S
U
P
P
O
R
T
K
E
Y
_
D
E
S
C
_
I
N
V
A
L
I
D
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
.
'
<
/
p
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
n
e
w
a
l
_
l
i
n
k
 
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
'
.
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
_
A
D
M
I
N
.
'
&
t
a
s
k
=
s
t
r
i
p
e
_
s
u
b
s
c
r
i
b
e
"
>
S
u
b
s
c
r
i
b
e
 
n
o
w
<
/
a
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
p
p
o
r
t
_
k
e
y
_
s
t
a
t
u
s
 
=
 
'
<
s
p
a
n
 
c
l
a
s
s
=
"
b
a
d
g
e
"
>
S
t
a
t
u
s
<
/
s
p
a
n
>
 
'
.
$
j
o
m
r
e
s
_
c
h
e
c
k
_
s
u
p
p
o
r
t
_
k
e
y
-
>
k
e
y
_
s
t
a
t
u
s
.
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
p
p
o
r
t
_
k
e
y
_
o
w
n
e
r
 
=
 
'
<
s
p
a
n
 
c
l
a
s
s
=
"
b
a
d
g
e
"
>
O
w
n
e
r
<
/
s
p
a
n
>
 
'
.
$
j
o
m
r
e
s
_
c
h
e
c
k
_
s
u
p
p
o
r
t
_
k
e
y
-
>
o
w
n
e
r
.
'
<
b
r
/
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
p
p
o
r
t
_
k
e
y
_
e
x
p
i
r
e
s
 
=
 
'
<
s
p
a
n
 
c
l
a
s
s
=
"
b
a
d
g
e
"
>
E
x
p
i
r
e
s
<
/
s
p
a
n
>
 
'
.
$
j
o
m
r
e
s
_
c
h
e
c
k
_
s
u
p
p
o
r
t
_
k
e
y
-
>
e
x
p
i
r
e
s
.
'
'
;

	
	
	
$
s
u
p
p
o
r
t
_
k
e
y
_
l
i
c
e
n
s
e
_
n
a
m
e
 
=
 
'
<
s
p
a
n
 
c
l
a
s
s
=
"
b
a
d
g
e
"
>
L
i
c
e
n
s
e
 
n
a
m
e
<
/
s
p
a
n
>
 
'
.
$
j
o
m
r
e
s
_
c
h
e
c
k
_
s
u
p
p
o
r
t
_
k
e
y
-
>
l
i
c
e
n
s
e
_
n
a
m
e
.
'
'
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
c
h
e
c
k
_
s
u
p
p
o
r
t
_
k
e
y
-
>
i
s
_
t
r
i
a
l
_
l
i
c
e
n
s
e
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
p
p
o
r
t
_
k
e
y
_
i
s
_
t
r
i
a
l
_
l
i
c
e
n
s
e
 
=
 
'
<
s
p
a
n
 
c
l
a
s
s
=
"
b
a
d
g
e
 
b
a
d
g
e
-
w
a
r
n
i
n
g
"
>
T
r
i
a
l
 
l
i
c
e
n
s
e
<
/
s
p
a
n
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

 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
p
p
o
r
t
_
k
e
y
_
s
t
a
t
u
s
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
p
p
o
r
t
_
k
e
y
_
o
w
n
e
r
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
p
p
o
r
t
_
k
e
y
_
m
e
s
s
a
g
e
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
u
p
p
o
r
t
_
k
e
y
_
e
x
p
i
r
e
s
 
=
 
'
'
;

	
	
	
$
s
u
p
p
o
r
t
_
k
e
y
_
l
i
c
e
n
s
e
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
s
u
p
p
o
r
t
_
k
e
y
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
l
i
m
i
t
 
=
 
'
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
A
_
T
A
B
S
_
M
I
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
A
_
T
A
B
S
_
M
I
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
S
U
P
P
O
R
T
K
E
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
S
U
P
P
O
R
T
K
E
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
p
a
s
s
w
o
r
d
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
x
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
l
i
c
e
n
s
e
k
e
y
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
l
i
c
e
n
s
e
k
e
y
'
 
]
.
'
"
 
/
>
<
b
r
/
>
'
.
'
 
'
.
$
s
u
p
p
o
r
t
_
k
e
y
_
s
t
a
t
u
s
.
'
 
'
.
$
s
u
p
p
o
r
t
_
k
e
y
_
o
w
n
e
r
.
'
 
'
.
$
s
u
p
p
o
r
t
_
k
e
y
_
e
x
p
i
r
e
s
.
'
 
'
.
$
r
e
n
e
w
a
l
_
l
i
n
k
.
'
 
'
.
$
s
u
p
p
o
r
t
_
k
e
y
_
i
s
_
t
r
i
a
l
_
l
i
c
e
n
s
e
.
'
 
'
.
$
s
u
p
p
o
r
t
_
k
e
y
_
l
i
c
e
n
s
e
_
n
a
m
e
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
S
U
P
P
O
R
T
K
E
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
S
U
P
P
O
R
T
K
E
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
.
'
 
'
.
$
s
u
p
p
o
r
t
_
k
e
y
_
m
e
s
s
a
g
e
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
j
o
m
r
e
s
_
c
h
e
c
k
_
s
u
p
p
o
r
t
_
k
e
y
-
>
s
h
o
p
_
s
t
a
t
u
s
 
=
=
 
'
O
P
E
N
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
L
I
C
E
N
S
E
S
E
R
V
E
R
_
U
S
E
R
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
L
I
C
E
N
S
E
S
E
R
V
E
R
_
U
S
E
R
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
l
i
c
e
n
s
e
_
s
e
r
v
e
r
_
u
s
e
r
n
a
m
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
c
e
n
s
e
_
s
e
r
v
e
r
_
u
s
e
r
n
a
m
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
_
J
O
M
R
E
S
_
L
I
C
E
N
S
E
S
E
R
V
E
R
_
U
S
E
R
N
A
M
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
L
I
C
E
N
S
E
S
E
R
V
E
R
_
U
S
E
R
N
A
M
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
L
I
C
E
N
S
E
S
E
R
V
E
R
_
P
A
S
S
W
O
R
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
L
I
C
E
N
S
E
S
E
R
V
E
R
_
P
A
S
S
W
O
R
D
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
p
a
s
s
w
o
r
d
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
l
i
c
e
n
s
e
_
s
e
r
v
e
r
_
p
a
s
s
w
o
r
d
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
l
i
c
e
n
s
e
_
s
e
r
v
e
r
_
p
a
s
s
w
o
r
d
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
B
O
O
T
S
T
R
A
P
S
W
I
T
C
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
B
O
O
T
S
T
R
A
P
S
W
I
T
C
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
u
s
e
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
_
i
n
_
f
r
o
n
t
e
n
d
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
B
O
O
T
S
T
R
A
P
S
W
I
T
C
H
_
I
N
F
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
B
O
O
T
S
T
R
A
P
S
W
I
T
C
H
_
I
N
F
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
B
O
O
T
S
T
R
A
P
_
V
E
R
S
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
B
O
O
T
S
T
R
A
P
_
V
E
R
S
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
b
o
o
t
s
t
r
a
p
_
v
e
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
B
O
O
T
S
T
R
A
P
_
V
E
R
S
I
O
N
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
B
O
O
T
S
T
R
A
P
_
V
E
R
S
I
O
N
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
C
O
M
_
C
H
O
O
S
E
L
A
N
G
U
A
G
E
S
_
S
H
O
W
D
R
O
P
D
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
C
H
O
O
S
E
L
A
N
G
U
A
G
E
S
_
S
H
O
W
D
R
O
P
D
O
W
N
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
C
H
O
O
S
E
L
A
N
G
U
A
G
E
S
_
S
H
O
W
D
R
O
P
D
O
W
N
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
C
H
O
O
S
E
L
A
N
G
U
A
G
E
S
_
S
H
O
W
D
R
O
P
D
O
W
N
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
R
E
G
I
O
N
_
T
R
A
N
S
L
A
T
I
O
N
_
S
W
I
T
C
H
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
R
E
G
I
O
N
_
T
R
A
N
S
L
A
T
I
O
N
_
S
W
I
T
C
H
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
r
e
g
i
o
n
_
n
a
m
e
s
_
a
r
e
_
t
r
a
n
s
l
a
t
a
b
l
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
R
E
G
I
O
N
_
T
R
A
N
S
L
A
T
I
O
N
_
S
W
I
T
C
H
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
R
E
G
I
O
N
_
T
R
A
N
S
L
A
T
I
O
N
_
S
W
I
T
C
H
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
C
O
M
_
L
A
N
G
U
A
G
E
_
C
O
N
T
E
X
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
L
A
N
G
U
A
G
E
_
C
O
N
T
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
a
n
g
u
a
g
e
_
c
o
n
t
e
x
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
L
A
N
G
U
A
G
E
_
C
O
N
T
E
X
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
C
O
M
_
L
A
N
G
U
A
G
E
_
C
O
N
T
E
X
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
C
O
M
_
J
R
C
O
N
F
I
G
_
G
L
O
B
A
L
E
D
I
T
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
C
O
M
_
J
R
C
O
N
F
I
G
_
G
L
O
B
A
L
E
D
I
T
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
e
d
i
t
i
n
g
M
o
d
e
A
f
f
e
c
t
s
A
l
l
P
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
J
R
C
O
N
F
I
G
_
G
L
O
B
A
L
E
D
I
T
I
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
C
O
M
_
J
R
C
O
N
F
I
G
_
G
L
O
B
A
L
E
D
I
T
I
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
*
 
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
N
F
I
G
_
J
Q
U
E
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
N
F
I
G
_
J
Q
U
E
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
l
o
a
d
_
j
q
u
e
r
y
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
N
F
I
G
_
J
Q
U
E
R
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
N
F
I
G
_
J
Q
U
E
R
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
 
*
/


	
	
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
N
F
I
G
_
J
Q
U
E
R
Y
_
U
I
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
F
I
G
_
J
Q
U
E
R
Y
_
U
I
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
l
o
a
d
_
j
q
u
e
r
y
_
u
i
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
N
F
I
G
_
J
Q
U
E
R
Y
_
U
I
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
N
F
I
G
_
J
Q
U
E
R
Y
_
U
I
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
C
O
N
F
I
G
_
J
Q
U
E
R
Y
_
U
I
_
C
S
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
N
F
I
G
_
J
Q
U
E
R
Y
_
U
I
_
C
S
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
l
o
a
d
_
j
q
u
e
r
y
_
u
i
_
c
s
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
F
I
G
_
J
Q
U
E
R
Y
_
U
I
_
C
S
S
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
N
F
I
G
_
J
Q
U
E
R
Y
_
U
I
_
C
S
S
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
J
Q
U
E
R
Y
T
H
E
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
J
Q
U
E
R
Y
T
H
E
M
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
q
u
e
r
y
U
I
t
h
e
m
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
L
i
s
t
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
J
Q
U
E
R
Y
T
H
E
M
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
J
Q
U
E
R
Y
T
H
E
M
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
F
O
N
T
A
W
E
S
O
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
F
O
N
T
A
W
E
S
O
M
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
l
o
a
d
_
f
o
n
t
_
a
w
e
s
o
m
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
F
O
N
T
A
W
E
S
O
M
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
F
O
N
T
A
W
E
S
O
M
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
B
O
O
T
S
T
R
A
P
_
L
O
C
A
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
B
O
O
T
S
T
R
A
P
_
L
O
C
A
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
n
a
v
b
a
r
_
l
o
c
a
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
B
O
O
T
S
T
R
A
P
_
L
O
C
A
T
I
O
N
_
I
N
V
E
R
S
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
B
O
O
T
S
T
R
A
P
_
L
O
C
A
T
I
O
N
_
I
N
V
E
R
S
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
n
a
v
b
a
r
_
i
n
v
e
r
s
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
W
_
P
O
W
E
R
E
D
B
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
S
H
O
W
_
P
O
W
E
R
E
D
B
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
s
h
o
w
_
p
o
w
e
r
e
d
_
b
y
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
S
E
S
S
I
O
N
_
H
A
N
D
L
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
S
E
S
S
I
O
N
_
H
A
N
D
L
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
s
e
s
s
i
o
n
_
h
a
n
d
l
e
r
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
S
E
S
S
I
O
N
_
H
A
N
D
L
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
S
E
S
S
I
O
N
_
H
A
N
D
L
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
U
N
I
N
S
T
A
L
L
_
T
A
B
L
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
U
N
I
N
S
T
A
L
L
_
T
A
B
L
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
d
e
l
e
t
e
_
a
l
l
_
d
a
t
a
_
o
n
_
u
n
i
n
s
t
a
l
l
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
U
N
I
N
S
T
A
L
L
_
T
A
B
L
E
S
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
U
N
I
N
S
T
A
L
L
_
T
A
B
L
E
S
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
'
F
r
o
n
t
e
n
d
 
C
o
n
t
r
o
l
 
P
a
n
e
l
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
P
A
N
E
L
_
G
R
I
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
C
P
A
N
E
L
_
G
R
I
D
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
f
r
o
n
t
_
c
p
a
n
e
l
_
h
o
m
e
_
g
r
i
d
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
P
A
N
E
L
_
G
R
I
D
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
P
A
N
E
L
_
G
R
I
D
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
1
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

