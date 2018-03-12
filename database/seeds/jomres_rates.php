
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
7
 
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


$
q
u
e
r
y
 
=
 
"
T
R
U
N
C
A
T
E
 
T
A
B
L
E
 
`
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
a
t
e
s
`
;
"
;


i
f
 
(
!
d
o
I
n
s
e
r
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
)
 
{

	
$
t
h
i
s
-
>
s
e
t
M
e
s
s
a
g
e
(
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
t
r
u
n
c
a
t
e
 
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
a
t
e
s
 
t
a
b
l
e
'
,
 
'
d
a
n
g
e
r
'
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
q
u
e
r
y
 
=
 
"

I
N
S
E
R
T
 
I
N
T
O
 
`
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
a
t
e
s
`
 
(
`
r
a
t
e
s
_
u
i
d
`
,
 
`
r
a
t
e
_
t
i
t
l
e
`
,
 
`
r
a
t
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
`
,
 
`
v
a
l
i
d
f
r
o
m
`
,
 
`
v
a
l
i
d
t
o
`
,
 
`
r
o
o
m
r
a
t
e
p
e
r
d
a
y
`
,
 
`
m
i
n
d
a
y
s
`
,
 
`
m
a
x
d
a
y
s
`
,
 
`
m
i
n
p
e
o
p
l
e
`
,
 
`
m
a
x
p
e
o
p
l
e
`
,
 
`
r
o
o
m
c
l
a
s
s
_
u
i
d
`
,
 
`
i
g
n
o
r
e
_
p
p
p
n
`
,
 
`
a
l
l
o
w
_
p
h
`
,
 
`
a
l
l
o
w
_
w
e
`
,
 
`
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
`
)
 
V
A
L
U
E
S
 

(
1
,
 
'
D
o
u
b
l
e
 
r
o
o
m
 
r
a
t
e
'
,
 
'
D
o
u
b
l
e
 
r
o
o
m
 
r
a
t
e
'
,
 
'
2
0
1
8
/
0
1
/
0
1
'
,
 
'
2
0
2
8
/
0
1
/
0
1
'
,
 
1
1
0
,
 
1
,
 
1
0
0
0
,
 
1
,
 
4
,
 
1
,
 
0
,
 
1
,
 
1
,
 
1
)
;

"
;


i
f
 
(
!
d
o
I
n
s
e
r
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
)
 
{

	
$
t
h
i
s
-
>
s
e
t
M
e
s
s
a
g
e
(
'
E
r
r
o
r
,
 
u
n
a
b
l
e
 
t
o
 
i
n
s
e
r
t
 
s
a
m
p
l
e
 
d
a
t
a
 
i
n
 
t
h
e
 
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
a
t
e
s
 
t
a
b
l
e
'
,
 
'
d
a
n
g
e
r
'
)
;

}

