
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
6
0
0
0
s
h
o
w
_
l
i
c
e
n
s
e
_
m
e
s
s
a
g
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

	
	

	
	
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
=
 
'
'
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
 
]
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
_
n
o
w
 
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
 
]
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
_
n
o
w
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 

	
	
/
*
 
i
f
 
(
d
e
f
i
n
e
d
(
'
L
I
C
E
N
S
E
_
E
X
P
I
R
E
D
_
M
E
S
S
A
G
E
'
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
=
 
L
I
C
E
N
S
E
_
E
X
P
I
R
E
D
_
M
E
S
S
A
G
E
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}
 
*
/

	
	

	
	
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

	
	

	
	
/
/
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
 
s
t
a
t
u
s
 
c
h
e
c
k

	
	
$
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
"
t
a
s
k
"
)
 
!
=
 
"
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
s
t
a
t
u
s
 
=
=
 
"
E
x
p
i
r
e
d
"
)
 
{

	
	
	
	
$
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
d
i
v
 
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
e
r
r
o
r
"
>

	
<
h
3
>
D
e
a
r
 
'
.
h
t
m
l
s
p
e
c
i
a
l
c
h
a
r
s
(
u
c
w
o
r
d
s
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
o
w
n
e
r
)
)
.
'
,
 
y
o
u
r
 
J
o
m
r
e
s
 
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
 
h
a
s
 
e
x
p
i
r
e
d
,
 
s
o
 
y
o
u
`
r
e
 
m
i
s
s
i
n
g
 
t
h
e
s
e
 
g
r
e
a
t
 
f
e
a
t
u
r
e
s
 
a
n
d
 
b
e
n
e
f
i
t
s
!
<
/
h
3
>

	
<
u
l
>

	
	
<
l
i
>
<
i
 
c
l
a
s
s
=
"
f
a
 
f
a
-
c
h
e
c
k
"
>
<
/
i
>
 
P
l
u
g
i
n
 
u
p
d
a
t
e
s
 
a
n
d
 
n
e
w
 
p
l
u
g
i
n
 
r
e
l
e
a
s
e
s
<
/
l
i
>

	
	
<
l
i
>
<
i
 
c
l
a
s
s
=
"
f
a
 
f
a
-
c
h
e
c
k
"
>
<
/
i
>
 
E
x
c
l
u
s
i
v
e
 
m
e
m
b
e
r
s
 
o
n
l
y
 
E
m
a
i
l
/
T
i
c
k
e
t
s
 
s
u
p
p
o
r
t
<
/
l
i
>

	
	
<
l
i
>
<
i
 
c
l
a
s
s
=
"
f
a
 
f
a
-
c
h
e
c
k
"
>
<
/
i
>
 
W
o
r
r
y
-
f
r
e
e
 
J
o
m
r
e
s
 
C
o
r
e
 
u
p
d
a
t
e
s
<
/
l
i
>

	
<
/
u
l
>

	
<
p
>
J
o
m
r
e
s
 
m
e
m
b
e
r
s
h
i
p
 
i
s
 
v
e
r
y
 
a
f
f
o
r
d
a
b
l
e
 
a
n
d
 
o
f
f
e
r
s
 
a
c
c
e
s
s
 
t
o
 
a
l
l
 
p
l
u
g
i
n
s
 
a
n
d
 
m
e
m
b
e
r
-
o
n
l
y
 
s
u
p
p
o
r
t
 
s
e
r
v
i
c
e
s
.
<
p
>

	
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
j
o
m
r
e
s
U
r
l
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
'
)
.
'
"
 
c
l
a
s
s
=
"
b
t
n
 
b
t
n
-
l
a
r
g
e
 
b
t
n
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
R
e
s
t
a
r
t
 
y
o
u
r
 
m
e
m
b
e
r
s
h
i
p
 
n
o
w
!
<
/
a
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
s
t
a
t
u
s
 
=
=
 
"
U
n
k
n
o
w
n
"
 
 
|
|
 
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
 
=
=
 
"
D
i
s
a
b
l
e
d
"
 
)
 
{

	
	
	
	
$
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
d
i
v
 
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
e
r
r
o
r
"
>
	
	
	
	

	
<
h
3
>
U
n
f
o
r
t
u
n
a
t
e
l
y
 
y
o
u
 
d
o
n
`
t
 
s
e
e
m
 
t
o
 
b
e
 
u
s
i
n
g
 
a
 
v
a
l
i
d
 
J
o
m
r
e
s
 
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
,
 
s
o
 
y
o
u
`
r
e
 
m
i
s
s
i
n
g
 
o
n
 
t
h
e
s
e
 
g
r
e
a
t
 
f
e
a
t
u
r
e
s
 
a
n
d
 
b
e
n
e
f
i
t
s
!
<
/
h
3
>

	
<
u
l
>

	
	
<
l
i
>
<
i
 
c
l
a
s
s
=
"
f
a
 
f
a
-
c
h
e
c
k
"
>
<
/
i
>
 
<
a
 
h
r
e
f
=
"
h
t
t
p
s
:
/
/
w
w
w
.
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
/
j
o
m
r
e
s
-
p
l
u
g
i
n
s
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
P
l
u
g
i
n
s
<
/
a
>
 
t
h
a
t
 
g
r
e
a
t
l
y
 
e
x
t
e
n
d
 
J
o
m
r
e
s
 
f
u
n
c
t
i
o
n
a
l
i
t
y
<
/
l
i
>

	
	
<
l
i
>
<
i
 
c
l
a
s
s
=
"
f
a
 
f
a
-
c
h
e
c
k
"
>
<
/
i
>
 
E
x
c
l
u
s
i
v
e
 
m
e
m
b
e
r
s
 
o
n
l
y
 
E
m
a
i
l
/
T
i
c
k
e
t
s
 
s
u
p
p
o
r
t
<
/
l
i
>

	
	
<
l
i
>
<
i
 
c
l
a
s
s
=
"
f
a
 
f
a
-
c
h
e
c
k
"
>
<
/
i
>
 
W
o
r
r
y
-
f
r
e
e
 
J
o
m
r
e
s
 
C
o
r
e
 
u
p
d
a
t
e
s
<
/
l
i
>

	
<
/
u
l
>

	
<
p
>
J
o
m
r
e
s
 
m
e
m
b
e
r
s
h
i
p
 
i
s
 
v
e
r
y
 
a
f
f
o
r
d
a
b
l
e
 
a
n
d
 
o
f
f
e
r
s
 
a
c
c
e
s
s
 
t
o
 
a
l
l
 
p
l
u
g
i
n
s
 
a
n
d
 
m
e
m
b
e
r
-
o
n
l
y
 
s
u
p
p
o
r
t
 
s
e
r
v
i
c
e
s
.
<
p
>

	
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
j
o
m
r
e
s
U
r
l
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
'
)
.
'
"
 
c
l
a
s
s
=
"
b
t
n
 
b
t
n
-
l
a
r
g
e
 
b
t
n
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
S
t
a
r
t
 
y
o
u
r
 
f
r
e
e
 
t
r
i
a
l
 
n
o
w
!
<
/
a
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

	
	
	
}

	
	
e
l
s
e
 
$
m
e
s
s
a
g
e
 
=
 
"
"
;

	
	

	
	
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
_
n
o
w
)
 
{

	
	
	
e
c
h
o
 
$
m
e
s
s
a
g
e
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
=
 
$
m
e
s
s
a
g
e
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
 
$
t
h
i
s
-
>
r
e
t
V
a
l
s
;

 
 
 
 
}

}

